<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ClientController extends Controller
{
    //

    public function __construct()
    {
        $categories = Category::all();
        $post_new = Post::orderBy('created_at', 'desc')->skip(0)->take(5)->get();
        View::share([
            'list_products_new'=>$post_new,
            'categories' => $categories
        ]);
    }

    function listPost(){
        $listPost = \App\Models\Post::paginate(10);
        return view('list_post', ['listPost'=>$listPost]);
    }

    function categoriesList($url){
        $category = Category::where('slug', $url)->firstOrFail();
        $posts = $category->posts()->paginate(10);

        return view('category' , ['category' => $category, 'posts'=>$posts]);
    }

    function detailsPost($url){
        $post = \App\Models\Post::where('url',$url)->firstOrFail();

        return view('details_post' , ['post'=> $post]);
    }

    function detailsAuthor($author){
        $author = \App\Models\Author::where('url',$author)->firstOrFail();
        $posts = $author->posts()->paginate(10);

        return view('author', ['author'=>$author, 'posts'=>$posts]);
    }
}
