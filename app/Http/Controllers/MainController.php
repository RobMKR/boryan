<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function repair()
    {
        return view('pages.repair');
    }

    public function install()
    {
        return view('pages.install');
    }

    public function setup()
    {
        return view('pages.setup');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost()
    {
        return response()->json([], 200);
    }

    public function subscribe(Request $request)
    {
        session()->flash('x', 'You have subscribed to newsletter');

        return redirect()->back();
    }

}
