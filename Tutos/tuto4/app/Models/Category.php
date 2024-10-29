<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'body', 'category_id'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
