<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        $showContact = Contact::all();
        return view('backend.pages.Contact.showContact', compact('showContact'));
    }

    public function viewContact($id)
    {
        $viewContact = Contact::find($id);
        return view('backend.pages.Contact.viewContact', compact('viewContact')); 
    }

    public function deleteContact($id)
    {
        $deleteContact = Contact::find($id);
        $deleteContact->delete();
    }
}
