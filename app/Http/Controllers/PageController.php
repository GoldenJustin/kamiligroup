<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function gallery()
    {
        return view('pages/gallery/index');
    }

    public function about()
    {
        return view('pages/about/index');
    }

    public function mbweni()
    {
        return view('pages/projects/mbweni');
    }
    public function nightclub()
    {
        return view('pages/projects/night-club');
    }
    public function baharibeach()
    {
        return view('pages/projects/baharibeach');
    }
    public function tmark()
    {
        return view('pages/projects/tmark');
    }
    public function bluecoast()
    {
        return view('pages/projects/bluecoast');
    }
    public function drcembassy()
    {
        return view('pages/projects/drcembassy');
    }
    public function psitanzania()
    {
        return view('pages/projects/psitanzania');
    }
    public function kisota()
    {
        return view('pages/projects/kisota');
    }
    public function zic()
    {
        return view('pages/projects/zic');
    }
    public function tpdc()
    {
        return view('pages/projects/tpdc');
    }
    public function cfao()
    {
        return view('pages/projects/cfao');
    }
   
    
    public function projects()
    {
        return view('pages/projects/index');
    }

    public function services()
    {
        return view('pages/services/index');
    }

    public function contact()
    {
        return view('pages/contacts/index');
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
