<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeopleRequest;
use App\Models\People;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PeopleControler extends Controller
{

    public function form_people()
    {
        return view('admin.pages.people.people_add');
    }

    public function add_people(PeopleRequest $request)
    {
            People::query()
                ->create(
                $request->all(['number_of_people'])
            );
            return redirect()->route('admin.table_people');

        }

    public function table_people()
    {
        $peoples = People::query()->get();
        return  view('admin.pages.people.people_table',compact('peoples'));
    }

    public function destroy(People $people): RedirectResponse
    {
        $x=People::where('id', $people->id);
//        $people= People::query()->get()->where('id',$id);
        $x->delete  ();
        return redirect()->route('admin.table_people');
    }
}
