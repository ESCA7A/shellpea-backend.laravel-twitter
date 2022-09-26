<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\FollowHelper;
use App\Models\FollowerUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FollowHelper $followHelper, User $user)
    {
        return view('templates.customer.followers', [
            'followers' => $followers = Auth::user()->followers,
            'follows' => $follows = Auth::user()->follows,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FollowHelper $followHelper, FollowerUser $followerUser, User $user)
    {
        $user = User::find($request->user_id);

        if ($request->follow) {
            $followHelper->follow($user);
        }

        if ($request->unfollow) {
            $followHelper->unfollow($user);
        }

        return redirect()->route('followers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function show(FollowerUser $follower)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function edit(FollowerUser $follower, FollowHelper $followHelper, Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FollowerUser $follower, FollowHelper $followHelper)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function destroy(FollowerUser $follower)
    {
    }
}
