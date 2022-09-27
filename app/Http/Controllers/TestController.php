<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
    // $posts = Test::all();
    // $posts = DB::table('tests')->orderBy('name', 'desc')->get();
    $posts = Test::where('id', 2)->get();
    // dd($posts);
    return view('pages.home', compact('posts') );
    
    }
    public function about()
    {
    return view('pages.about');
    }
}
