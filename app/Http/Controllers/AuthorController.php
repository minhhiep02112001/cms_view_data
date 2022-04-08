<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Service\UploadFileImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::paginate(10);
        return  view('admin.author.index' , compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'authors_name' => 'required|max:55',
            'url' => 'required|unique:authors,url|max:255',
            'image' =>'sometimes|image|max:2040',
            'year_of_birth' => 'required|max:55',
            'information' => 'required',
        ]);

        try{
            if($request->hasFile('image')){
                $image = UploadFileImage::upload($request->image , './images/authors/');
            }

            DB::beginTransaction();
            $author = new Author();
            $author->authors_name = $request->authors_name;
            $author->year_of_birth = $request->year_of_birth;
            $author->image = $image ?? '';
            $author->url = $request->url;
            $author->information = $request->information;
            $author->save();
            DB::commit();
            return redirect()->route('author.index')->with('notification_success' , 'Successfully');
        }catch (\Exception $ex){
            DB::rollBack();
            @unlink($image ?? '');
            return back()->with('notification_error' , 'Error!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $request->validate([
            'authors_name' => 'required|max:55',
            'url' => [
                'required',
                "unique:authors,url,".$author->id,
                'max:255'
            ],
            'image' =>'sometimes|image|max:2040',
            'year_of_birth' => 'required|max:55',
            'information' => 'required',
        ]);
        try{
            if($request->hasFile('image')){
                $image = UploadFileImage::upload($request->image , './images/authors/');
            }
            $old_image = $author->image;
            DB::beginTransaction();
            $author->authors_name = $request->authors_name;
            $author->year_of_birth = $request->year_of_birth;
            $author->image = $image??$old_image;
            $author->url = $request->url;
            $author->information = $request->information;
            $author->save();
            DB::commit();
            if(isset($image)){
                @unlink($old_image);
            }
            return redirect()->route('author.index')->with('notification_success' , 'Successfully');

        }catch (\Exception $ex){
            DB::rollBack();
            @unlink($image);
            return back()->with('notification_error' , 'Error!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
