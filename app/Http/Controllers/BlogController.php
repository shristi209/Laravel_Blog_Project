<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category.name' => 'required|unique:categories,name',
        ]);

    $category = \App\Models\Category::create(['name' => $validatedData['category']['name']]);

    $blogData = [
        'title' => $validatedData['title'],
        'description' => $validatedData['description'],
        'category_id' => $category->id,
    ];

    return \App\Models\Blog::create($blogData);
    }
 
    public function index()
    {
        return Blog::with('category')->get();
    }

    public function show($id)
    {
        return Blog::find($id);
    }

    public function update(Request $request, $id, $category_name)
    {
        $blog = Blog::findOrFail($id);
    
        // Update blog post data
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->save();

        // Update category name if provided
        if (!empty($category_name)) {
            $blog->category()->update(['name' => $category_name]);
        }

        return $blog;
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully'], 200);
    }
    
    
}
