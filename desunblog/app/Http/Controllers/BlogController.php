<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function createBlog() {
       return view('addblog');
    }
    public function saveBlog(Request $request) {
        $title=$request->title;
        $description=$request->desc;
        $create_by=$request->create_by;
        $create_at=$request->create_at;
        $modify_by=$request->modify_by;
        $modify_at=$request->modify_at;
        $data=['title'=>$title,'description'=>$description,'created_by'=>$create_by,'created_at'=>$create_at,'modify_by'=>$modify_by,'modify_at'=>$modify_at];
        $result=Blog::saveBlog($data);
        if($result) {
            dd("successful");
        }

    }
    public function displayBlog() {
        $id=session()->get('uid');
    }
    
}
