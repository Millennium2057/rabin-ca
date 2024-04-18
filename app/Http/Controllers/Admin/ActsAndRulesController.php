<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActsAndRules;
use Exception;
use Illuminate\Http\Request;

class ActsAndRulesController extends Controller
{
    public function addActAndRules()
    {
        return view('backend.pages.ActsAndRules.addActsAndRules');
    }

    public function showActAndRules()
    {
        $showActsAndRules = ActsAndRules::all();
        return view('backend.pages.ActsAndRules.showActsAndRules', compact('showActsAndRules'));
    }

    public function storeActAndRules(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable|url',
            'image' => 'nullable|image',
            'pdf' => 'nullable|file|mimes:pdf',
        ]);

        try {
            $addActsAndRules = new ActsAndRules();
            $addActsAndRules->category = $request->category;
            $addActsAndRules->title = $request->title;
            $addActsAndRules->description = $request->description;
            $addActsAndRules->link = $request->url;

            // Handle file upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $newImageName = time() . '.' . $image->getClientOriginalName();
                $image->move(public_path('/images/actAndRulesImages/Acts/'), $newImageName);
                $addActsAndRules->image = '/images/actAndRulesImages/Acts/' . $newImageName;
            }

            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');
                $newPdfName = time() . '.' . $pdf->getClientOriginalName();
                $pdf->move(public_path('/images/actAndRulesImages/PDF/'), $newPdfName);
                $addActsAndRules->pdf = '/images/actAndRulesImages/PDF/' . $newPdfName;
            }

            if (!$request->hasFile('image') && !$request->hasFile('pdf') && !$request->url) {
                return redirect()->back()->with('error', 'You must upload an image in the Image section or a PDF file in the PDF section or a link file in the Link section..');
            }

            $addActsAndRules->save();
            return redirect()->back()->with('success', 'Successfully Added Credential:');
        } catch (\Throwable $th) {


            return redirect()->back()->with('error', 'Error While Adding Credential:' . $th->getMessage());
        }
    }

    public function editActAndRules($id)
    {

        $editActsAndRules = ActsAndRules::find($id);
        return view('backend.pages.ActsAndRules.editActsAndRules', compact('editActsAndRules'));
    }


    public function updateActAndRules(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'url' => 'nullable|url',
            'image' => 'nullable|image',
            'pdf' => 'nullable|file|mimes:pdf',
        ]);

        try {
            $updateActsAndRules = ActsAndRules::find($id);
            $updateActsAndRules->category = $request->category;
            $updateActsAndRules->title = $request->title;
            $updateActsAndRules->description = $request->description;
            $updateActsAndRules->link = $request->url;

            // Handle file upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $newImageName = time() . '.' . $image->getClientOriginalName();
                $image->move(public_path('/images/actAndRulesImages/Acts/'), $newImageName);
                $updateActsAndRules->image = '/images/actAndRulesImages/Acts/' . $newImageName;
            }

            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');
                $newPdfName = time() . '.' . $pdf->getClientOriginalName();
                $pdf->move(public_path('/images/actAndRulesImages/PDF/'), $newPdfName);
                $updateActsAndRules->pdf = '/images/actAndRulesImages/PDF/' . $newPdfName;
            }

            if (!$request->hasFile('image') && !$request->hasFile('pdf') && !$request->url) {
                return redirect()->back()->with('error', 'You must upload an image in the Image section or a PDF file in the PDF section or a link file in the Link section..');
            }

            $updateActsAndRules->update();
            return redirect()->route('show.ActsAndRules')->with('success', 'Successfully Updated Credential:');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Error While Updating Credential:');
        }
    }


    public function deleteActAndRules($id)
    {
        try {
            $deleteActsAndRules = ActsAndRules::find($id);
            $deleteActsAndRules->delete();
            return redirect()->back()->with('success', 'Successfully Deleted Credential:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Updating Credential:');
        }
    }
}
