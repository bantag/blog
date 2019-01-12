<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['showPost']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $posts=Post::with("user")->get(); 
        
        return view('home',compact("posts"));
    }

    public function showPost()
    {
        $posts=Post::get();
        
        return view('post.index',compact("posts"));
    }


    public function getPostForm() {
        return view('post/post_form');
    }

    public function createPost(Request $request){
        $post = Post::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'user_id' => Auth::user()->id
        ));
        return redirect()->route('home')->with('success', 'Post has been successfully added!');
    }

    public function editPost($id)
    {
        
        $post=Post::Where('id',$id)->get()->First();
        
        return view('post/post_Edit',compact('post'));

    }
    public function savePost(Request $request){
        $data = array(
            'id' => Input::get('id'),
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'user_id' => Auth::user()->id
        );
        
        Post::find(intval($data["id"]))->update($data);
       
        return redirect()->route('home')->with('success', 'Post has been successfully updated!');
    }

    public function deletePost($id)
    {
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success','Post has been deleted successfully');

    }
}