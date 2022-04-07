<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = ['authors_name','year_of_birth','image','information','url'];

    function posts(){
        return $this->hasMany(Post::class , 'author_id', 'id');
    }
}
