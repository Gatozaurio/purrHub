<?php

namespace App\Http\Controllers;

use App\Concert;
use Illuminate\Http\Request;
use App\Http\Requests\ConcertRequest;

class ConcertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.conciertos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConcertRequest $request)
    {
        Concert::create([
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
        //$concert = \App\Concert::findOrFail($id);
        return view('public.conciertos.edit', ['concert' => $concert]);
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
}
