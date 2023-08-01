<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = Contact::query()->get();
        return view('admin.pages.contact', compact('contacts'));
    }
}
