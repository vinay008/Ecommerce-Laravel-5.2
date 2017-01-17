@extends('frontend.layout')
@include('frontend.partials.header1')
@section('content')
    <div class=" colo-md-10 container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-push-1">
          @if(!Auth::check())          
          <!--Upper part-->
          <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
            <h5>You Must Login Sign Up before You can buy the product</h5>
            <div>
              <br>
            </div>
            <!-- Button trigger modal -->
            <a href="SignInPage"><button type="button" class="btn btn-success btn-default col-md-1">Sign in</button></a>

            <a href="SignUpPage"><button type="button" class="btn btn-success btn-responsive col-md-1 col-md-push-1">Sign Up</button></a>
          </div>
          @endif
        </div>
        <div class=" colo-md-10 container-fluid">
          <div class="row">
            <div class="col-md-10 col-md-push-1">
              @include('frontend.partials._messages')
              <!--Lower part-->
              <div class="col-md-12  text-justify well " style="border:1px solid; border-radius:0px;">
                <div class="col-md-12">
                  <h3>Checkout</h3>
                </div>
                <div class="col-md-12 table-responsive">
                  <table id="myTable" class="table  table-bordered table-striped">
                    <thead style="background-color:#bdbdbd;">
                      <tr>
                        <th>Product Name</th>
                        <th>Availability</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th>Payment Option</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th id="FooterHidden"></th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <tr>
                        <td>Xiaomi Redmi Note 3</td>
                        <td>In Stock</td>
                        <td>3</td>
                        <td>35000</td>
                        <td>Cash On Delivery</td>
                        <td>Remove</td>
                      </tr>
                      <tr>
                        <td>Moto G4 Plus(32GB)</td>
                        <td>Out Of Stock</td>
                        <td>2</td>
                        <td>35000</td>
                        <td>Cash On Delivery</td>
                        <td>Remove</td>
                      </tr>
                      <tr>
                        <td>Moto Z</td>
                        <td>In Stock</td>
                        <td>1</td>
                        <td>35000</td>
                        <td>Cash On Delivery</td>
                        <td>Remove</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!--Main bottom part-->
                <div class="col-md-12">
                  <div class="col-md-12">
                    <h3>Shipping Address</h3>
                  </div>
                  <div class="col-md-4">
                    <!--This is for shipping address-->
                    <textarea rows="4" class="col-md-12" name="permanentaddress"></textarea>
                  </div>
                  <div class="col-md-3">
                    <!--This is for Checkbox-->
                    <input type="checkbox" name="permanentaddresschk" value="">Same as Permanent Address</div>
                  <div class="col-md-3 col-md-push-3">
                    <!--This is for Buy now button-->
                    <a href="OrderConfirmationPage"><button type="button" class="btn btn-success col-md-6 btn-responsive">Buy Now</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection    
