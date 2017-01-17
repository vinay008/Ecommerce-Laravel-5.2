<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Setting;

class PageController extends Controller
{
  
  public function __construct()
   {
     $this->middleware('auth', ['except' => ['getActivate', 'anotherMethod','index','ProductCategoriesPage','ProductDetailsPage','CheckoutPage','SignUpPage','SignInPage']]);
   }
  
  //This if for frontend part
  public function index()
    { 
      $setting = new Setting;
      $settingsObject = $setting->all()->pluck('Value');
      $count = count($settingsObject);
      // $settingsArray
      for($i = 0 ; $i < $count ; $i++ )
      {
        $settingsArray[$i] = $settingsObject[$i]; 
      }
      
      return view('frontend.index',compact('settingsArray'));
    }

   public function ProductCategoriesPage()
    {
      $setting = new Setting;
      $settingsObject = $setting->all()->pluck('Value');
      $count = count($settingsObject);
      // $settingsArray
      for($i = 0 ; $i < $count ; $i++ )
      {
        $settingsArray[$i] = $settingsObject[$i]; 
      }

      return view('frontend.ProductCategoriesPage',compact('settingsArray'));
    }

   public function ProductDetailsPage()
    {
    	return view('frontend.ProductDetailsPage');
    }

   public function CheckoutPage()
    {
    	return view('frontend.CheckoutPage');	
    }

   public function OrderConfirmationPage()
    {
    	return view('frontend.OrderConfirmationPage');
    }   

   public function SignUpPage()
    {
    	return view('frontend.SignUpPage');
    }

   public function SignInPage()
    {
    	return view('frontend.SignInPage');
    }        

   public function UserOrderHistoryPage()
    {
    	return view('frontend.User-OrderHistoryPage');
    }   
   public function UserMyProfilePage()
    {
    	return view('frontend.User-MyProfilePage');
    }    

   public function UserMyProfilePageEdit()
    {
    	
    }

    //This part is now for backed part


    public function Dashboard()
    {
     return view('backend.Dashboard'); 
    }

    public function OrderListingPage()
    {
      return view('backend.OrderListingPage');
    }

      public function CategoryPageListattributes()
      {
        return view('backend.CategoryPageListattributes');
      }

      public function CategoryPageProductListing()
      {
        return view('backend.CategoryPageProductListing');
      }    

      
      public function BannersPage()
      {
        return view('backend.BannersPage');
      }

      public function StaticPages()
      {
        return view('backend.StaticPages');
      }        
}
