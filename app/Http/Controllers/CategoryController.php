<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255|unique:category,name',
            'description' => 'nullable',
        ]);
        $category = new Category();
        try {
            DB::beginTransaction();
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->description = $request->description ?? '';
            $category->save();
            DB::commit();
            return redirect()->route('category.index')->with('notification_success', 'Successfully');
        } catch (\Exception $ex) {
            dd($ex->getMessage());
            DB::rollBack();
            return back()->with('notification_error', 'Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255|unique:category,name,'.$category->id,
            'description' => 'nullable',
        ]);
        try {
            DB::beginTransaction();
            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->description = $request->description?? $category->description;
            $category->save();
            DB::commit();
            return redirect()->route('category.index')->with('notification_success', 'Successfully');
        } catch (\Exception $ex) {
            DB::rollBack();
            return back()->with('notification_error', 'Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->delete()) {
            return redirect()->route('category.index')->with('notification_success', 'Successfully');
        } else {
            return redirect()->route('category.index')->with('notification_error', 'Error');
        }
    }
}
