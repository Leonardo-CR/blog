<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    //Relacion Muchos a muchos de Tag a Posts
    public function posts():BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
}
