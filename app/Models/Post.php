<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{

    use HasFactory;

    //Relacion 1 a muchos inversa de Post a User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Relacion 1 a muchos inversa de Post a Category
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relacion Muchos a Muchos de Post a Tags
    public function Tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Relacion 1 a 1 Polimorfica => imageable es el nombre del metodo de la otra tabla
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}
