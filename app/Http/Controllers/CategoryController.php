<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexcat()
    {
        $cat = Category::all();
        return view("backend.CategoryPage",compact("cat"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createcat()
    {
        return view ('backend.CategoryPageAddCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecat(Request $request)
    {
        Category::create(Request::all());
        return redirect("CategoryPage");
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
    public function editcat($id)
    {
         $cat=Category::find($id);
        return view("backend.CategoryPageEditCategory",compact("cat"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatecat(Request $request, $id)
    {
        $cat = Category::find($id);
        $cat->update(Request::all());
        $cat->save();
        return redirect('CategoryPage')->with('message','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroycat($id)
    {

        $cat = Category::find($id);
        $cat->delete();
        return redirect('CategoryPage')->with('message','deleted');
    }
}
