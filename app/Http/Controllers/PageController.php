<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function contact()
    {
        return view('pages/contacts/index');
    }

    public function about()
    {
        return view('pages/about/index');
    }

    public function values()
    {
        return view('pages/values/index');
    }

    public function team()
    {
        return view('pages/team/index');
    }

    public function clients()
    {
        return view('pages/clients/index');
    }
}
