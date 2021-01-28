<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return response()->json(['success'=>'Got Simple Ajax Request.', 'data'=>$posts, 'status'=>200]);
    }
}
