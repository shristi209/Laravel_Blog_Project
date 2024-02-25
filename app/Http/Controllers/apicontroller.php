<?php

namespace App\Http\Controllers;
use App\Models\BlogModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {   
        $blogs = new blogmodel();                        // using blog model
        $blogs->title=$request->input('title');
        $blogs->description=$request->input('description');
        $blogs->category=$request->input('category');

        $blogs->save();
        return response()->json($blogs); // returning student
    }
    public function read()
    {
        $blogs = blogmodel::all();  
        return response()->json($blogs);
    }
    public function readbyid($id)
    {
        $blogs=blogmodel::find($id);
        return response()->json($blogs);
    }
    public function updatebyid(Request $request,$id)
    {
        $blogs=blogmodel::find($id);
        $blogs->title=$request->input('title');
        $blogs->description=$request->input('description');
        $blogs->category=$request->input('category');

        $blogs->save();
        return response()->json($blogs); 
    }
}
