<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $followers = $user->followers;
        return view('templates.customer.followers', ['followers' => $followers]);
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
        $result = $request->status;
        if ($result === 'follow') {
            FollowerUser::firstOrCreate([
                'user_id' => $request->id,
                'follower_id' => Auth::user()->id,
            ]);

            return view('templates.customer.followers');
        }

        if ($result === 'unfollow') {
            FollowerUser::firstOrCreate([
                'user_id' => $request->id,
                'follower_id' => Auth::user()->id,
            ]);

            return view('templates.customer.followers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function show(FollowerUser $follower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function edit(FollowerUser $follower)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FollowerUser  $follower
     * @return \Illuminate\Http\Response
     */
    public function destroy(FollowerUser $follower)
    {
        //
    }
}
