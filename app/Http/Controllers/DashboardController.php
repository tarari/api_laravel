<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{

    function index(){
        $url=env('APP_URL').'/api/posts';
        dd($url);
        $response=Http::get($url);
        $data = json_decode($response->body(), true);

    }
}
