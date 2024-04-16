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

  // Modify the ActsAndRules model

// Modify the storeActAndRules method
public function storeActAndRules(Request $request)
{
    try {
        $addActsAndRules = new ActsAndRules();
        $addActsAndRules->category = $request->category;
        $addActsAndRules->title = $request->title;
        $addActsAndRules->description = $request->description;

        // Handle file upload
        $image = $request->file('image');
        $pdf = $request->file('pdf');
        $link = $request->input('link');

        // Determine file type
        $fileType = $image ? 'image' : ($pdf ? 'pdf' : ($link ? 'link' : null));

        if ($fileType === 'image') {
            // Handle image upload
            $newImageName = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('/images/actAndRulesImages/Acts/'), $newImageName);
            $addActsAndRules->image = $newImageName;
        } elseif ($fileType === 'pdf') {
            // Handle PDF upload
            $newPdfName = time() . '.' . $pdf->getClientOriginalName();
            $pdf->move(public_path('/images/actAndRulesImages/PDF/'), $newPdfName);
            $addActsAndRules->pdf = $newPdfName;
        } elseif ($fileType === 'link') {
            // Handle link
            $addActsAndRules->link = $link;
        }

        $addActsAndRules->save();
        return redirect()->back()->with('success', 'Successfully Added Credential:');
    } catch (Exception $ex) {
        return redirect()->back()->with('error', 'Error While Adding Credential:' . $ex->getMessage());
    }
}

    
    
}
