<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'url', 'summary', 'created_at'];
    function author(){
        return $this->belongsTo(Author::class, 'author_id','id');
    }
    function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }
}
