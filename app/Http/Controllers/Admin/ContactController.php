<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContact()
    {
        return view('backend.pages.Contact.showContact');
        
    }
   
}
