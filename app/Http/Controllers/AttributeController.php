<?php

namespace App\Http\Controllers;

use App\Attribute;


use Request;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Input;

use View;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexattr()
    {
        $attr = Attribute::all();
        $category_id= Input::get('category_id');
        $category_name= Input::get('category_name');
         // $data = array('category_id' => $category_id,
         //          'category_name' => $category_name);

        return view('backend.CategoryPageListattributes',compact("attr"))->with(array('category_id' => $category_id,
                  'category_name' => $category_name));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createattr()
    {
        $category_id= Input::get('category_id');
        $category_name= Input::get('category_name');
         // $data = array('category_id' => $category_id,
         //          'category_name' => $category_name);

        return view('backend.AddAttributes')->with(array('category_id' => $category_id,
                  'category_name' => $category_name));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeattr(Request $request)
    {
            Attribute::create(Request::all());
         $category_id= Input::get('category_id');
        $category_name= Input::get('category_name');
         // $data = array('category_id' => $category_id,
         //          'category_name' => $category_name);
        // dd((array('category_id' => $category_id,
        // //           'category_name' => $category_name)));
        return redirect( 'CategoryPageListattributes')->with( 'category_id', $category_id )->with('category_name',$category_name);
        // return redirect("CategoryPageListattributes")->with(array('category_id' => $category_id,
        //           'category_name' => $category_name));
        // $category_name= Input::get('category_name');
        // $category_id= Input::get('category_id');
        // $attribute = new Attribute;
        // $attribute->attribute_name = Input::get('attribute_name');
        // $attribute->category_id= Input::get('category_id');
        // $attribute->save();
        // return redirect('CategoryPageListattributes')->with('category_id', $category_id)->with('category_name', $category_name);
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
    public function editattr($id)
    {
         $attr=Attribute::find($id);
         $category_id= Input::get('category_id');
         $category_name= Input::get('category_name');
         $data = array('category_id' => $category_id,
                  'category_name' => $category_name);
        
        return view("backend.EditAttributes",compact("attr"))->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateattr(Request $request, $id)
    {
         $category_id= Input::get('category_id');
        $category_name= Input::get('category_name');
         $data = array('category_id' => $category_id,
                  'category_name' => $category_name);
         $attr = Attribute::find($id);
        $attr->update(Request::all());
        $attr->save();
        return redirect('CategoryPageListattributes')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyattr($id)
    {
         $attr = Attribute::find($id);
        $attr->delete();
        return redirect('CategoryPageListattributes')->with('message','deleted');
    }
}
