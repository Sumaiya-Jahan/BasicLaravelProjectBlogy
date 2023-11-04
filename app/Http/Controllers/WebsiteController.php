<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    private $categories,$blogs,$blog,$category_name,$comments;
    public function index()
    {

        $this->blogs=Blog::orderBy('id','desc')->take(6)->get(['id','name','image']);


        return view('website.home.index',['blogs'=>$this->blogs]);

    } public function category($id)
    {

        $this->blogs= Blog::where(['category_id'=> $id, 'status'=> 1])->orderBy('id','desc')->get();
        $this->category_name =Category::where(['id'=>$id])->value('name');

        return view('website.category.index',[
            'blogs'=> $this->blogs,
            'category_name'=>$this->category_name
        ]);

    }
    public function blogs($id)
    {
        return view('website.category.index');

    }
    public function detail($id)
    {
        $this->blog = Blog::find($id);
        $this->comments = Comment::where('blog_id',$id)->where('status',1)->get();
        return view('website.detail.index',['blog'=>$this->blog, 'comments'=>$this->comments]);

    }
}
