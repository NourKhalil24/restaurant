<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookControlller extends Controller
{
    public function book()
    {
        return view('front.pages.booking');
    }
}
