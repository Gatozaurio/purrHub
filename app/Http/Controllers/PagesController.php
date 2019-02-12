<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
      return view('public.pages.index');
    }

    public function calendario()
    {
      return view('public.pages.calendario');
    }

    public function acercade()
    {
      return view('public.pages.acercade');
    }

    public function contacto()
    {
      return view('public.pages.contacto');
    }
}
