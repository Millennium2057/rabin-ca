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
       try {
        $deleteContact = Contact::find($id);
        $deleteContact->delete();
        return back()->with('success', 'Successfully Deleted Contact:');
       } catch (\Throwable $th) {
        return back()->with('error', 'Error While Deleting Contact:');

       }
    }
}