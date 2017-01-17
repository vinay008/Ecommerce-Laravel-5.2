<?php

namespace App\Http\Controllers;

use Request;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Product;

use App\Image;

use App\Attribute;

use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Product::all();
        return view("backend.ProductsPage",compact("user"));
    }

    public function indexList()
    {
        $user = Product::all();
        return view("backend.CategoryPageProductListing",compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_id= Input::get('product_id');
        // dd(array('product_id' => $product_id,
        //           'category_name' => $category_name));
        return view ('backend.ProductsPageAddProduct')->with(array('product_id' => $product_id));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product=Product::create(Request::all());
        $product_id=$product->product_id;
        $category_name=$product->category_name;
        $pass=Product()->attribute()->attribute_id;
        dd($pass);
        // $product = new Product;
        // $productArray =$product->all()->pluck('product_id');
        // $arraySize = count($productArray);
        // $product_id = $productArray[$arraySize-1];
        //dd((array('product_id' => $product_id,'category_name'=>$category_name)));
        return view("backend.ProductsPageAddProductImage")->with(array('product_id' => $product_id,'category_name'=>$category_name));
    }

    public function storeImg_pro(/*Request $request*/)
    {
        //Image::create(Request::all());
        $product_id = $_POST["product_id"];
                if(isset($_FILES['files'])){
            $errors= array();
            foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                $file_name = $key.$_FILES['files']['name'][$key];
                $file_size =$_FILES['files']['size'][$key];
                $file_tmp =$_FILES['files']['tmp_name'][$key];
                $file_type=$_FILES['files']['type'][$key];  
                if($file_size > 20097152){
                    $errors[]='File size must be less than 2 MB';
                } 

                $img_dir="img_data";
                if(empty($errors)==true){
                    if(is_dir($img_dir)==false){
                        mkdir("$img_dir", 0700);        // Create directory if it does not exist
                    }
                    if(is_dir("$img_dir/".$file_name)==false){
                        move_uploaded_file($file_tmp,"img_data/".$file_name);
                    }else{                                  //rename the file if another one exist
                        $new_dir="img_data/".$file_name.time();
                         rename($file_tmp,$new_dir) ; 
                         $img_path= $new_dir;             
                    }
                    $img_path="img_data/".$file_name; 
                    //dd($img_path);
                    //$query="INSERT into images (`image_url`,`product_id`) VALUES('$img_path','$product_id'); ";
                    $insert = DB::insert('insert into images (image_url, product_id) values (?, ?)', array($img_path,$product_id));
                    //DB::table('users')->insert(['email' => 'john@example.com', 'votes' => 0]);
                    //mysql_query($query);            
                }else{
                        print_r($errors);
                }
            }
            if(empty($error)){
                echo "Success";
            }
            }
        return redirect("ProductsPage");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $user=Product::find($id);
        return view("show",compact("user"));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=Product::find($id);
        return view("backend.ProductsPageEditProduct",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$img_all = Image::all();
        //$imgvar = DB::select('select image_url from images where product_id = ?', array($id));
        $user = Product::find($id);
        $user->update(Request::all());
        $user->save();
        return redirect('ProductsPage')->with('message','updated');
    }
    public function update_next(Request $request, $id)
    {
        //$img_all = Image::all();
        //$product_id = DB::select('select product_id from products where product_id = ?', array($id));
        $user = Product::find($id);
        $user->update(Request::all());
        $user->save();
        return view('backend.ProductsPageEditProductImage',compact("user"));
    }
    public function updateImg_pro(Request $request,$id)
    {
        $product_id = $_POST["product_id"];
        DB::delete('delete from images where product_id = ?',array($id));
        if(isset($_FILES['files'])){
            $errors= array();
            foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
                $file_name = $key.$_FILES['files']['name'][$key];
                $file_size =$_FILES['files']['size'][$key];
                $file_tmp =$_FILES['files']['tmp_name'][$key];
                $file_type=$_FILES['files']['type'][$key];  
                if($file_size > 2097152){
                    $errors[]='File size must be less than 2 MB';
                } 

                $img_dir="img_data";
                if(empty($errors)==true){
                    if(is_dir($img_dir)==false){
                        mkdir("$img_dir", 0700);        // Create directory if it does not exist
                    }
                    if(is_dir("$img_dir/".$file_name)==false){
                        move_uploaded_file($file_tmp,"img_data/".$file_name);
                    }else{                                  //rename the file if another one exist
                        $new_dir="img_data/".$file_name.time();
                         rename($file_tmp,$new_dir) ; 
                         $img_path= $new_dir;             
                    }
                    $img_path="img_data/".$file_name; 
                    //dd($img_path);
                    //$query="INSERT into images (`image_url`,`product_id`) VALUES('$img_path','$product_id'); ";
                    $insert = DB::insert('insert into images (image_url, product_id) values (?, ?)', array($img_path,$product_id));
                    //DB::table('users')->insert(['email' => 'john@example.com', 'votes' => 0]);
                    //mysql_query($query);            
                }else{
                        print_r($errors);
                }
            }
            if(empty($error)){
                echo "Success";
            }
            }
        return redirect("ProductsPage")->with('message','updated');
       /* $imgvar = DB::select('select image_url from images where product_id = ?', array($id));
        $imgvar->update(Request::all());
        $imgvar->save();*/
        
    }
    public function updateList(Request $request, $id)
    {
        
        $user = Product::find($id);
        $user->update(Request::all());
        $user->save();
        return redirect('CategoryPageProductListing')->with('message','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from images where product_id = ?',array($id));
        $user = Product::find($id);
        $user->delete();
      
        return redirect('ProductsPage')->with('message','deleted');
    }
    public function destroyList($id)
    {
        
        $user = Product::find($id);
        $user->delete();
      
        return redirect('CategoryPageProductListing')->with('message','deleted');
    }

    public function getAttributes()
    {
        return view('backend.ProductAttributeValue');
    }
    // public function editReassign($id)
    // {
    //     $user=Product::find($id);
    //     return view("backend.CategoryPageProductListing",compact("user"));
    // }

    // public function reassignList(Request $request,$id)
    // {
    //     $user = Product::find($id);
    //     dd($user);
    //     $user->update(Request::all());
    //     dd($user);
    //     $user->save();
    //     return redirect('CategoryPageProductListing')->with('message','updated');
        
    // }
}
