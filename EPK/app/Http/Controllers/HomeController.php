<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('EPK/dashboard');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $searched_posts = Post::where('title', 'like', "%$query%" )->orWhere('description',  'like', "%$query%")->get();

        return view('EPK.search', compact('searched_posts'));
    }
} 
