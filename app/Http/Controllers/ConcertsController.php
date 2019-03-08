<?php

namespace App\Http\Controllers;

use App\Concert;
use App\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\ConcertRequest;

class ConcertsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create' , 'store', 'edit', 'update', 'destroy', 'deleteAjax']
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$conciertos = Concert::paginate(12);
		return view('public.conciertos.index', ['concerts' => $conciertos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$artistas = Artist::all();

        return view('public.conciertos.create', ['artists' => $artistas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConcertRequest $request)
    {
        $concert = Concert::create([
			'name' => request('name'),
			'slug' => str_slug(request('name'), "-"),
	        'price' => request('price'),
	        'city' => request('city'),
	        'location' => request('location'),
	        'address' =>request('address'),
	        'date' => request('date'),
	        'schedule' => request('schedule'),
	        'ticket' => request('ticket'),
	        'info' => request('info')
		]);

		$concert->artists()->sync( request('artists') );

        return redirect('/conciertos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $concert = Concert::where('slug', $slug)->firstOrFail();

        return view('public.conciertos.show', ['concierto' => $concert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function edit(Concert $concert)
    {
        $artistas = Artist::all();

        //$concert = \App\Concert::findOrFail($id);
        return view('public.conciertos.edit', ['concert' => $concert], ['artists' => $artistas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function update(ConcertRequest $request, Concert $concert)
    {
		$concert->update([
			'name' => request('name'),
			'slug' => str_slug(request('name'), "-"),
	        'price' => request('price'),
	        'city' => request('city'),
	        'location' => request('location'),
	        'address' =>request('address'),
	        'date' => request('date'),
	        'schedule' => request('schedule'),
	        'ticket' => request('ticket'),
	        'info' => request('info')
		]);

        return redirect('/conciertos/'.$concert->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concert $concert)
    {
        $concert->delete();

        return redirect('/conciertos');
    }

	/**
     * Remove the specified resource from storage through ajax.
     *
     * @param  concert id
     * @return \Illuminate\Http\Response
     */
	public function deleteAjax($id)
	{
		$concert = Concert::where('id', $id)->firstOrFail();

		$concert->delete();

		return "Elemento borrado correctamente";
    }

    public function searchAjax()
	{
        $search = request('search');
        $conciertos = Concert::where('name', 'like', '%'.$search.'%' )->get();
        return view('public.conciertos.partials.showConcerts', ['concerts' => $conciertos]);
    }
    
    public function paginateAjax($contador)
	{
        $conciertos = Concert::skip($contador)->take(12)->get();

        $view = "";
        if(!empty($conciertos)){
            $view = view('public.conciertos.partials.showConcerts', ['concerts' => $conciertos]);
        }
        return $view;
    
	}
}
