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
}
