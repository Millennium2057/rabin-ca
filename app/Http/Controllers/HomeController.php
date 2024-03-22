<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('frontend.pages.index');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function act(){
        return view('frontend.pages.act');
    }

    public function rules(){
        return view('frontend.pages.rules');
    }

    public function directives(){
        return view('frontend.pages.directives');
    }

    public function fdi(){
        return view('frontend.pages.fdi');
    }

    public function accounting(){
        return view('frontend.pages.accounting');
    }

    public function notices(){
        return view('frontend.pages.notices');
    }

    public function taxation(){
        return view('frontend.pages.taxation');
    }

    public function finance(){
        return view('frontend.pages.finance');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function otherjob(){
        return view('frontend.pages.otherjob');
    }

    public function blog(){
        return view('frontend.pages.blog');
    }
    public function blogsdetail(){
        return view('frontend.pages.blogsdetail');
    }
    public function training(){
        return view('frontend.pages.training');
    }

    public function contactus(){
        return view('frontend.pages.contactus');
    }

    public function emicalculator(){
        return view('frontend.pages.emicalculator');
    }

    public function taxcalculator(){
        return view('frontend.pages.taxcalculator');
    }

    public function taxrates(){
        return view('frontend.pages.taxrates');
    }

    public function datecalculator(){
        return view('frontend.pages.datecalculator');
    }


}
