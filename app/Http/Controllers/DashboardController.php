<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{

    function index(){

        $response=Http::get('http://localhost:8000/api/posts');
        $data = json_decode($response->body(), true);
        dd($data);
    }
}
