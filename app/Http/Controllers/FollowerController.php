<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Helpers\FollowHelper;
use App\Models\FollowerUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowerController extends Controller
{
    public const FOLLOW = 'follow';
    public const UNFOLLOW = 'unfollow';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FollowHelper $followHelper, User $user)
    {
        return view('templates.customer.followers', [
            'followers' => $followers = Auth::user()->followers,
            'user' => $user,
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
        $isFollow = $followHelper->isFollow($user);

        dd($followerUser);

        return redirect()->route('user.show', [
            'user' => $user,
            'isFollow' => $isFollow,
        ]);
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
    public function edit(FollowerUser $follower)
    {
        if ($request->follow) {
            return $followHelper->follow($user);
        }

        if ($request->unfollow) {
            return $followHelper->unfollow($user);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FollowerUser $follower)
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
        return redirect()->route('followers.index', [$follower->delete()]);
    }
}
