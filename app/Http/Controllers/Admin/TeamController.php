<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function showTeam()
    {
        $showTeam = Team::all();
        return view('backend.pages.Team.showTeam', compact('showTeam'));
    }

    public function addTeam()
    {

        return view('backend.pages.Team.addTeam');
    }
    public function storeTeam(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        try {
            $storeTeam = new Team();
            $storeTeam->name = $request->name;
            $storeTeam->designation = $request->designation;
            $storeTeam->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/Team_image/'), $imageName);
                $storeTeam->image = '/images/Team_image/' . $imageName;

                $storeTeam->save();
                return redirect()->back()->with('success', 'Successfully Added Team:');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Adding Team:');
        }
    }
    public function editTeam($id)
    {
        $editTeam = Team::find($id);
        return view('backend.pages.Team.editTeam', compact('editTeam'));
    }
    public function updateTeam(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
          
        ]);

        try {
            $updateTeam = Team::find($id);
            $updateTeam->name = $request->name;
            $updateTeam->designation = $request->designation;
            $updateTeam->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . $image->getClientOriginalName();
                $image->move(public_path('/images/Team_image/'), $imageName);
                $updateTeam->image = '/images/Team_image/' . $imageName; 
            }
            $updateTeam->update();
            return redirect()->route('show.team')->with('success', 'Successfully Updated Team:');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Updating Team:');
        }
    }
    public function deleteTeam($id)
    {

        try {
            Team::find($id)->delete();
            return redirect()->back()->with('success', 'Successfully Deleted Team:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Deleting Team:');
        }
    }
}
