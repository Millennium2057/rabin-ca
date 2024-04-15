<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActsAndRulesController extends Controller
{
    public function addActAndRules ()
    {
        return view('backend.pages.ActsAndRules.addActsAndRules');
    }
}
