<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $posts = Post::all();
        //    ->select('id', 'title')
        //    ->wherebetween('id', [50, 500])
        //    ->where('id', '<', 500)
        //    ->where('title', 'like', '%b.')
        //    ->orderBy('title', 'asc')
        //    ->limit('100')
        //    ->get();
        // dd($posts);

        // $array= ['apple', '<h1>orange</h1>', 'pear'];
        return view('index', compact('posts'));

    }

    public function posts($id) {
        echo $id;
    }
}
