<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create' , 'store', 'edit', 'update', 'destroy']
        ]);
        $this->middleware(`can:modify,comment`,[
            'only' => ['edit', 'update', 'destroy']
        ]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        sleep(1);
        $comentario = Comment::create([
            'user_id'   =>  $request->user()->id,
            'concert_id'   =>  request('id_concierto'),
            'message'   =>  request('message')
        ]);
        return view('public.comentarios.index', ['comentario' => $comentario]);
    }
}
