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
        $customer = Auth::user();
        $userFollow = $customer->follows->where('user_id', $user->id)->all();
        return (!empty($userFollow));
    }

    /**
     * insert follow of current customer
     * @param User $user
     * @return bool
     */
    public function unfollow(User $user): bool
    {
        if ($this->isFollow($user)) {
            $currentCustomer = User::find(Auth::user()->id);
            $currentFollow = $currentCustomer->follows->where('user_id', $user->id);
            return FollowerUser::destroy($currentFollow);
        }

        return false;
    }

    /**
     * destroy current relations ship
     * @param User $user
     * @return bool
     */
    public function follow(User $user): bool
    {
        $currentCustomer = User::find(Auth::user()->id);

        FollowerUser::create([
            'user_id' => $user->id,
            'follower_id' => $currentCustomer->id,
        ]);

        return true;

    }
}
