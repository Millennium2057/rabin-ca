<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Team;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;

class HomeController extends Controller
{
    public function index()
    {
        $homeTestimonials = Testimonial::all();
        $homeBlogs = Blog::latest()->paginate(3);
        return view('frontend.pages.index', compact('homeBlogs','homeTestimonials'));
    }

    public function about()
    {
        $allTestimonials = Testimonial::all();
        $allTeams = Team::all();
        return view('frontend.pages.about', compact('allTeams','allTestimonials'));
    }

    public function act()
    {
        return view('frontend.pages.act');
    }

    public function rules()
    {
        return view('frontend.pages.rules');
    }

    public function directives()
    {
        return view('frontend.pages.directives');
    }

    public function fdi()
    {
        return view('frontend.pages.fdi');
    }

    public function accounting()
    {
        return view('frontend.pages.accounting');
    }

    public function notices()
    {
        return view('frontend.pages.notices');
    }

    public function taxation()
    {
        return view('frontend.pages.taxation');
    }

    public function finance()
    {
        return view('frontend.pages.finance');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }


    public function storeContact(Request $request)

    {
        try {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
                'g-recaptcha-response' => 'required|captcha:',
            ]);
          
            if ($validator->fails()) {
             
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $storeContact = new Contact();
            $storeContact->name = $request->name;
            $storeContact->email = $request->email;
            $storeContact->subject = $request->subject;
            $storeContact->message = $request->message;
            $storeContact->save();

            return redirect()->route('contactus')->with('success', 'Contact succesfully added');
        } catch (Exception $ex) {
            return back()->with('error', 'Error while storing Contacts');
        }
    }

    public function otherjob()
    {
        return view('frontend.pages.otherjob');
    }

    public function blog()
    {
        $allBlogs = Blog::all();
        return view('frontend.pages.blog', compact('allBlogs'));
    }
    public function blogsdetail($id)
    {

        $singleBlog = Blog::find($id);
        return view('frontend.pages.blogsdetail', compact('singleBlog'));
    }
    public function training()
    {
        return view('frontend.pages.training');
    }

    public function contactus()
    {
        return view('frontend.pages.contactus');
    }

    public function emicalculator()
    {
        return view('frontend.pages.emicalculator');
    }

    public function taxcalculator()
    {
        return view('frontend.pages.taxcalculator');
    }

    public function taxrates()
    {
        return view('frontend.pages.taxrates');
    }

    public function datecalculator()
    {
        return view('frontend.pages.datecalculator');
    }
}
