<?php

namespace App\Repositories;


// this is the level where the people deal with the database

use App\Http\Requests\PeopleRequest;

use App\Models\People;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeopleRepository {

    protected $model = People::class;

        public function add(PeopleRequest $request)
        {
            $people = new People(populateModelData($request , $this->model));
            $people->save();
        }

        public function update( Request $request , People $people)
        {
            $people->update(populateModelData($request , $this->model));


            if($request->hasFile('photo'))
            $people->photo = uploadImage('photo' , 'dish');
            $people->save();
            // in uploadFile ( 'the name of the new file we want to store '  , 'name of the folder where we want to store '
            //, ' the name of the old file in this category if we didn't senra new file in the request  ' )
        }

        public function delete(People $people)
        {
            deleteMedia( $people , 'photo'); // delete all images first
            $people->delete(); // delete the people

        }

        public function fetch(Request $request) // this method is like get product
    {
        // return Category::query()->get();
        $people  = People::query();
        if($search = $request->get('search'))
        {
            $tokens = convertToSeparatedTokens($search);
            $people->whereHas('translations' , function ($query) use ( $tokens){
                $query->whereRaw("MATCH (name , description ) AGAINST ( ? IN BOOLEAN MODE)" ,$tokens );
            });
        }

        return $people;

        //return Category::query(); // we delete get cause the people


    }


    }
