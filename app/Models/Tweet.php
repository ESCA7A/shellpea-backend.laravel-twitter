<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Tweet extends Model
{
    use HasFactory;

    /**
     * soft delete trait
     */
     use SoftDeletes;

      protected $table = 'tweets';
      protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
