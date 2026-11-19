<?php

namespace App\Http\Controllers;

// use App\Models\User;
// use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view("Šeit būs saraksts");
    }
}