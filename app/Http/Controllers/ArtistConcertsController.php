<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistConcertsController extends Controller
{
    public function index($artistSlug)
	{
		$artist = Artist::where('slug', $artistSlug)->firstOrFail();
		$concerts = $artist->concerts()->paginate(12);

		return view('public.conciertosartistas.index',[
            'artist'  => $artist,
            'concerts' => $concerts
        ]);
	}

	public function deleteAjax($id)
	{
		$concert = Concert::where('id', $id)->firstOrFail();

		$concert->delete();

		return "Elemento borrado correctamente";
    }

}
