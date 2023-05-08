<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{

    function index(Request $request){
        $url=env('APP_URL').'/api/posts';

        $token = $request->user()->createToken('api_token')->plainTextToken;
        $response=Http::timeout(60)->withHeaders(['Authorization' => 'Bearer '.$token,
        'Accept' => 'application/json',])->get($url);
        dd($response);
        $data = json_decode($response->body(), true);
        dd($data);
        return view('dashboard',['posts'=>$data]);


    }
}
