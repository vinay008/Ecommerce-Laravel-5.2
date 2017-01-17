@extends('frontend.layout')
@include('frontend.partials.header1')
@section('content')

  <div class="col-md-12 container">
      <div calss="col-md-12">
        <div class="col-md-10 col-md-push-1 container-fluid">
          <div class="col-md-12  well" style="border:1px solid ; border-radius:0px;">
            <h3 class="col-md-12" style="top:-35px; left:-10px; ">Xiaomi Redmi Note</h3>
            <div class="col-md-3" style="border:1px solid ; border-radius:0px;">
              <a href="#"><img src="img/XiaomiRedmiNote.jpg" class="img-responsive center-block" style="height:167px;"></a>
            </div>
            <div class="col-md-7" style="border:1px solid ; border-radius:0px; margin-left:5%;">
              <div class="col-md-8">
                <!-- for order part-->
                <h4 class="col-md-12 ">Order Now</h4>
                <div class="col-md-4 ">
                  <h5>Quantity</h5>
                </div>
                <div class="col-md-6">
						<input type='text' name='quantity'  readonly value='1' size="1%" class='qty' />
						<input type='button' value='-' class='qtyminus' field='quantity' />
						<input type='button' value='+' class='qtyplus' field='quantity' />
                </div>
                <div class="col-md-3 col-md-pull-4 ">
                  <h5>Availability</h5>
                </div>
                <div class="col-md-5 col-md-pull-3 ">
                  <h6 class="text-success col-md-6 col-md-pull-2">In Stock</h6>
                  <h6 class="text-danger col-md-6 col-md-pull-3">Out of Stock</h6>
                </div>
                <div class="col-md-2 ">
                  <h5>Price</h5>
                </div>
                <div class="col-md-3">
                  <h5>Rs.12000/-</h5>
                </div>
              </div>
              <div class="col-md-4">
                <!-- For payment part-->
                <h4 class="col-md-11 col-md-push-2">Payment Option</h4>
                <div class="col-md-12 col-md-push-1" style="  margin-top:-0.8%;">
                  <br>
                  <input type="radio" name="rr" value="r2">Cash on delivery</div>
                <div class="col-md-12">
                  <br>
                </div>
                <div class="col-md-4 col-md-push-2">
                  <a href="CheckoutPage"><button class="btn btn-success btn-responsive">Checkout</button></a>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <br>
            </div>
            <br/>
     <div class="container col-md-12">
     <div class="col-md-11"  style="border:1px solid ; border-radius:0px; padding:10px; background-color:grey;">        
	<div class="row">
    <div class="col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="carousel123" >
        <div class="carousel-inner">
          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-3">
			<a href="#"><img src="img/slider1.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#">
			<img src="img/slider3.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3"><a href="#">
			<img src="img/slider3.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>          
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
			<a href="#"><img src="img/slider4.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
			<a href="#"><img src="img/slider1.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
			<a href="#"><img src="img/slider2.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
			<a href="#"><img src="img/slider3.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>
          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-3">
			<a href="#"><img src="img/slider4.jpg" class="img-responsive " style="border:1px solid black ; border-radius:0px; height:130px;"></a></div>
          </div>
        </div>
        <a class="left carousel-control" id="left" href="#carousel123" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" id="right" href="#carousel123" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
    </div>
	</div>
  </div>
   <br><br>
                <!--/well-->
            
            <div class="col-md-12">
              <ul id="tabs">
                <li>
                  <a href="#specifications">specifications</a>
                </li>
              </ul>
              <div id="specifications" class="tab-section">
                <h2>Specification goes here</h2>
                <p>Give details</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection