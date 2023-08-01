<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;


function uploadImage($key = "avatar", $folder = 'users')
{

    $request = request();  // this is the request we sent it from the form which it contents the data (the data here is the image)
    if ($request->hasFile($key)) {  // if the request has a file then do the condition otherwise return false
        $file = $request->file($key); // extract the file from the request and store is in a variable $file
        $format = $file->getClientOriginalExtension(); // get the form of the file (png , jpg  , gif ...etc)

        $name = time() . generateRandomString(4) . ".$format"; // now we store the file name with the time() because the time() make the name uniq
        Storage::put($name, $file->getContent()); // at least we store the file with name $name amd the file is $file->getContent()
        if (Storage::move($name, "public/$folder/" . $name)) {
            $optimizerChain = OptimizerChainFactory::create(); // disless the  size of the photo
            $optimizerChain->optimize(storage_path('app/public/' . $folder . '/' . $name));
            return "/$folder/" . $name;
        }
    }
    return false;
}

function uploadFile($key = "file", $folder = 'projects', $oldFile = false)
{
    $request = request(); // get the request

    if ($request->hasFile($key)) {      // if the file exist do the condition
        if ($oldFile)   // if the file is an old file
            Storage::disk('public')->delete($oldFile); // then delete the old file and store the new one
             // end  second if

        $uploadedFile = $request->file($key); // get the file from the request
        $moved = Storage::disk('public')->put($folder, $uploadedFile); // store the file put(name , file)

        if ($moved)
            return $moved; // url to file
    }
    return $oldFile;
}



function deleteMedia($item , $key='avatar')
{
    if($item->{$key}!=null)  // if the key != null
        Storage::disk('public')->delete($item->{$key}); // then delete the image
}

