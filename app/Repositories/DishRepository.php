<?php

namespace App\Repositories;


// this is the level where the agent deal with the database

use App\Http\Requests\DishRequest;

use App\Models\Dish;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DishRepository {

    protected $model = Dish::class;

        public function add(DishRequest $request)
        {
            $agent = new Dish(populateModelData($request , $this->model));
            $agent->photo =uploadFile('photo','dish'); // pass to uploadImage( 'images which sent with the request and the folfer where we want to store the images
            $agent->save();
        }

        public function update( Request $request , Dish $agent)
        {
            $agent->update(populateModelData($request , $this->model));


            if($request->hasFile('photo'))
            $agent->photo = uploadImage('photo' , 'dish');
            $agent->save();
            // in uploadFile ( 'the name of the new file we want to store '  , 'name of the folder where we want to store '
            //, ' the name of the old file in this category if we didn't senra new file in the request  ' )
        }

        public function delete(Dish $agent)
        {
            deleteMedia( $agent , 'photo'); // delete all images first
            $agent->delete(); // delete the agent

        }

        public function fetch(Request $request) // this method is like get product
    {
        // return Category::query()->get();
        $agent  = Dish::query();
        if($search = $request->get('search'))
        {
            $tokens = convertToSeparatedTokens($search);
            $agent->whereHas('translations' , function ($query) use ( $tokens){
                $query->whereRaw("MATCH (name , description ) AGAINST ( ? IN BOOLEAN MODE)" ,$tokens );
            });
        }

        return $agent;

        //return Category::query(); // we delete get cause the agent


    }


    }
