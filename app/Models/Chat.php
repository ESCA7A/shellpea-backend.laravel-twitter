<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['messages'];

    public function author()
    {
        return $this->hasOne(User::class, 'author_id');
    }

    public function target()
    {
        return $this->hasOne(User::class, 'user_target');
    }
}
