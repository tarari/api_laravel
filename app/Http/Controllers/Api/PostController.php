<?php

namespace App\Http\Controllers\Api;

use Throwable;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    function index(){
        try{
            $posts=Post::all();
            return response([
                'msg'=>$posts,
                'status'=>true,
            ],201);
        }catch(\Throwable $t){
            return response([
                'msg'=>$t->getMessage(),
                'status'=>false,
            ],401);
        }



    }
    function store(Request $request){
        try{
            $validated=$this->validate($request->message,[
            'message'=>'required'
            ]);
            $request->user()->post()->create($validated);
            return response([
                'msg'=>'Post created',
                'status'=>true,
            ],201);

        }catch(\Throwable $t){
            return response([
                'msg'=>$t->getMessage(),
                'status'=>false,
            ],401);
        }



    }
}
