<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistRequest;

class ArtistsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$artistas = Artist::paginate(12);
        return view('public.artistas.index')->with('artists', $artistas);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('public.artistas.create');
	}

	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
        Artist::create([
			'name' => request('name'),
			'slug' => str_slug(request('name'), "-"),
	        'image' =>request('image'),
	        'info' => request('info'),
	        'web' => request('web'),
	        'spotify' => request('spotify'),
	        'youtube' =>request('youtube'),
	        'instagram' => request('instagram'),
	        'twitter' => request('twitter'),
	        'facebook' => request('facebook')
		]);

        return redirect('/artistas');
    }

	    /**
	     * Display the specified resource.
	     *
	     * @param  \App\Artist  $artist
	     * @return \Illuminate\Http\Response
	     */
	    public function show($slug)
	    {
	        $artist = Artist::where('slug', $slug)->firstOrFail();

	        return view('public.artistas.show', ['artist' => $artist]);
	    }


		/**
		* Show the form for editing the specified resource.
		*
		* @param  \App\Artist  $artist
		* @return \Illuminate\Http\Response
		*/
		public function edit(Artist $artist)
		{
			return view('public.artistas.edit', ['artist' =>	$artist]);
		}

		/**
	     * Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  \App\Artist  $artist
	     * @return \Illuminate\Http\Response
	     */
	    public function update(ArtistRequest $request, Artist $artist)
	    {
			$artist->update([
				'name' => request('name'),
				'slug' => str_slug(request('name'), "-"),
		        'image' =>request('image'),
		        'info' => request('info'),
		        'web' => request('web'),
		        'spotify' => request('spotify'),
		        'youtube' =>request('youtube'),
		        'instagram' => request('instagram'),
		        'twitter' => request('twitter'),
		        'facebook' => request('facebook')
			]);

	        return redirect('/artistas/'.$artist->slug);
	    }

		/**
	     * Remove the specified resource from storage.
	     *
	     * @param  \App\Artist  $artist
	     * @return \Illuminate\Http\Response
	     */
	    public function destroy(Artist $artist)
	    {
	        $artist->delete();

	        return redirect('/artistas');
	    }

}
