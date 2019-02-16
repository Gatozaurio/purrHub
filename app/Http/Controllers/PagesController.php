<?php

namespace App\Http\Controllers;

use App\Concert;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
		$concerts = Concert::take(5)->get();
      	return view('public.pages.index', ['concerts' => $concerts]);
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
