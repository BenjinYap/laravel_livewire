<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home():View
    {
        return view('home', [
            'articles' => Article::all()->sortByDesc(fn($a) => $a->created_at),
        ]);
    }
}
