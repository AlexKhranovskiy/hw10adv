<?php

namespace Hillel\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    //protected $table = 'tags';

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}