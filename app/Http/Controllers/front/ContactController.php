<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('front.pages.contact');
    }

    public function sendMessage( ContactRequest $request): RedirectResponse
    {
        Contact::query()
            ->create(
                $request->all(['name','email','subject','message'])
            );
//        dd($request->all());
        return redirect()->route('home');
    }
}
