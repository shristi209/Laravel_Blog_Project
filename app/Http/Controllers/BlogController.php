<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

//Post Blogs
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        return Blog::create($validatedData);
    }

//Get all the blogs
    public function index()
    {
        return Blog::with('category:id,name')->get();
    }

//Get blogs by id
    public function show($id)
    {
        return Blog::with('category:id,name')->findOrFail($id);
    }

//Update blogs
    public function update(Request $request, $id)
    {
        $blog = Blog::with('category:id,name')->findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $blog->update($validatedData);

        return response()->json(['data' => $blog], 200);;
    }

//Deleting blogs
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }
    
    
}
