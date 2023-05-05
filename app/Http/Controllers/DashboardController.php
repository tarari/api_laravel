<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{

    function index(Request $request){
        $url=env('APP_URL').'/api/posts';
        $token = $request->user()->createToken($request->token_name);
        $response=Http::withToken($token)->get($url);
        $data = json_decode($response->body(), true);
        return view('dashboard',['posts'=>$data]);


    }
}
