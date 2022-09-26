<?php

namespace App\Http\Controllers\Helpers;

use App\Http\Controllers\Controller;
use App\Models\FollowerUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowHelper extends Controller
{
    /**
     * checks if the current client is subscribed to the user
     * @param $id
     * @return mixed
     */
    public function isFollow(User $user): bool
    {
        $authUser = Auth::user();
        $relationOfUser = (FollowerUser::where('user_id', $user->id)->where('follower_id', $authUser->id)->get());
        foreach ($authUser->follows as $follow) {
             ($follow->user->id);
        }
        return (!empty($relationOfUser[0]->id));
    }

    /**
     * insert follow of current customer
     * @param User $user
     * @return bool
     */
    public function unfollow(User $user)
    {
        $authUser = User::find(Auth::user()->id);

        if ($this->isFollow($user)) {
            $currentFollow = $authUser->follows->where('user_id', $user->id);

            return FollowerUser::destroy($currentFollow);
        }

        return false;
    }

    /**
     * destroy current relations ship
     * @param User $user
     * @return bool
     */
    public function follow(User $user)
    {
        $authUser = User::find(Auth::user()->id);

        if (!$this->isFollow($user)) {

            return FollowerUser::firstOrCreate([
                'user_id' => $user->id,
                'follower_id' => $authUser->id,
            ]);
        }

        return false;
    }
}
