<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog()
    {
        $showBlog = Blog::all();
        return view('backend.pages.Blog.showBlog', compact('showBlog'));
    }
    public function addBlog()
    {
        return view('backend.pages.Blog.addBlog');
    }
    public function storeBlog(Request $request)
    {
        try {
            $storeBlogs = new Blog();
            $storeBlogs->title = $request->title;
            $storeBlogs->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . $image->getClientOriginalName();
                $image->move(public_path('Images/Blog_Image/'), $imageName);
                $storeBlogs->image = 'Images/Blog_Image/' . $imageName;
            }
            $storeBlogs->save();
            return redirect()->back()->with('success', 'Successfully Added Bolg:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Adding Blog:');
        }
    }
    public function editBlog($id)
    {
        $editBlog = Blog::Find($id);
        return view('backend.pages.Blog.editBlog', compact('editBlog'));
    }

    public function updateBlog(Request $request, $id)
    {
        try {
            $storeBlogs = Blog::find($id);
            $storeBlogs->title = $request->title;
            $storeBlogs->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . $image->getClientOriginalName();
                $image->move(public_path('Images/Blog_Image/'), $imageName);
                $storeBlogs->image = 'Images/Blog_Image/' . $imageName;
            }
            $storeBlogs->update();
            return redirect()->route('show.Blog')->with('success', 'Successfully Updated Bolg:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Updating Blog:');
        }
    }

    public function deleteBlog($id)
    {
        try {
            $deleteBlog = Blog::find($id);
        $deleteBlog->delete();
        return redirect()->back()->with('success', 'Successfully Deleted Bolg:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Deleting Blog:');

        }

    }
}
