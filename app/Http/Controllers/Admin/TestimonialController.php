<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function showTestimonial()
    {
        $showTestimonial = Testimonial::all();
        return view('backend.pages.Testimonial.showTestimonial', compact('showTestimonial'));
    }

    public function addTestimonial()
    {

        return view('backend.pages.Testimonial.addTestimonial');
    }
    public function storeTestimonial(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'designation' => 'required',

            'image' => 'required|image',
        ]);

        try {
            $storeTestimonial = new Testimonial();
            $storeTestimonial->name = $request->name;
            $storeTestimonial->designation = $request->designation;
            $storeTestimonial->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/Testimonial_image/'), $imageName);
                $storeTestimonial->image = '/images/Testimonial_image/' . $imageName;

                $storeTestimonial->save();
                return redirect()->back()->with('success', 'Successfully Added Testimonial:');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Adding Testimonial:');
        }
    }
    public function editTestimonial($id)
    {
        $editTestimonial = Testimonial::find($id);
        return view('backend.pages.Testimonial.editTestimonial', compact('editTestimonial'));
    }
    public function updateTestimonial(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',

        ]);

        try {
            $updateTestimonial = Testimonial::find($id);
            $updateTestimonial->name = $request->name;
            $updateTestimonial->designation = $request->designation;
            $updateTestimonial->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/Testimonial_image/'), $imageName);
                $updateTestimonial->image = '/images/Testimonial_image/' . $imageName;
            }
            $updateTestimonial->update();
            return redirect()->route('show.Testimonial')->with('success', 'Successfully Updated Testimonial:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Updating Testimonial:');
        }
    }
    public function deleteTestimonial($id)
    {

        try {
            Testimonial::find($id)->delete();
            return redirect()->back()->with('success', 'Successfully Deleted Testimonial:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Deleting Testimonial:');
        }
    }
}
