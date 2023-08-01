<?php

namespace App\Repositories;
use App\Http\Traits\ContactTrait;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactRepository {

        public function delete(Contact $contact)
        {
            $contact->delete();
        }

        public function getContact()
        {
            $contacts= Contact::query();
            return $contacts ;
        }

    }
