<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function __construct()
    {
        // $this->middleware(['auth', 'verified']);
    }

    /**
     * @return mixed
     */
    public function index()
    {
        // Return Response: view, json, redirect, file
        return view::make('Frontend.master');
    }
}
