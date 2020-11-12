<?php


namespace App;


trait Followable
{

    public function isFollowing(User $user)
    {
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }

    public function follows()
    {

        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }

    public function follow()
    {

        return $this->follows()->save();
    }
}
