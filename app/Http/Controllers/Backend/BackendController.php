<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class BackendController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Return Response: view, json, redirect, file
        return view::make('Backend.adminDashboard');
    }
}
