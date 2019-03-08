<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $comentario = Comment::create([
            'id_usuario'   =>  $request->user()->id,
            'id_concierto'   =>  request('id_concierto'),
            'message'   =>  request('message')
        ]);
        return view('public.comentarios.index', ['comentario' => $comentario]);
    }
}
