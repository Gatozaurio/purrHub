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

    public function conciertos()
    {
      $conciertos = \App\Concert::paginate(12);
      return view('public.pages.conciertos', ['concerts' => $conciertos]);
    }

    public function artistas()
    {
      return view('public.pages.artistas');
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
