<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function showBlog()
    {
        return view('backend.pages.Blog.showBlog');
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
        return view('backend.pages.Blog.editBlog');
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
            return redirect()->back()->with('success', 'Successfully Updated Bolg:');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error While Updating Blog:');
        }
    }

    public function deleteBlog($id)
    {
        $deleteBlog = Blog::find($id);
        $deleteBlog->delete();
    }
}
