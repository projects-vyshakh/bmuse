<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $pageTitle      = 'Home';
        $breadcrumbs    = 'Home';
        $browserTitle   = 'Home';
        $contentHeader  = 'Home';

        $parameters = compact(
            [
                'pageTitle', 'breadcrumbs','browserTitle', 'contentHeader'
            ]
        );

        //return view('subscriptions.index', $parameters);
        return view('home', $parameters);
    }
}
