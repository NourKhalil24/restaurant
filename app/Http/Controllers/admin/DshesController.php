<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DshesController extends Controller
{
    public function dishes()
    {
        return view('admin.pages.dishes_table');
    }
}
