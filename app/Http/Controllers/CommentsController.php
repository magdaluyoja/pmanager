<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        if(Auth::check()){
            $comment = Comment::create([
                'body' => $request->input('body'),
                'url' => $request->input('url'),
                'user_id' => $request->input('user_id'),
                'commentable_id' => $request->input('commentable_id'),
                'commentable_type' => $request->input('commentable_type'),
                'user_id' => Auth::user()->id
            ]);
            if($comment){
                return back()->with('success' , 'Comment posted successfully');
            }
        }
        
        return back()->withInput()->with('errors', 'Error posting new comment');
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
