<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //
     //Relacion 1 a Muchos de Category a Post

     public function posts():HasMany
     {
         return $this->hasMany(Post::class);
     }
}
