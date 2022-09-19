<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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
        dd(request());
        $data = request()->validate([
            'content' => 'string',
            'post_id' => '',
            'author_id' => Auth::user()->id
        ]);

        Comment::create($data);

        return redirect()->route('dashboard.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $commentary
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $commentary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $commentary
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $commentary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $commentary
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, Comment $commentary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $commentary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $commentary)
    {
        //
    }
}
