<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (session('error_message')) {
                Alert::error('Oops!', session('error_message'))->persistent('Dismiss');
            }

            if (session('success_message')) {
                Alert::success('Sucesso!', session('success_message'))->persistent('Dismiss');
            }

            return $next($request);
        });
    }

    public function index()
    {
        return view('home');
    }
}
