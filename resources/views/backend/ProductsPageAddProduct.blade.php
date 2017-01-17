@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <div class="col-md-12">
            <label>
              <h4>Products/Add Products  Product ID : {{ $product_id }}</h4>
            </label>
          </div>
          <div class="col-md-12" style="border:1px solid; border-radius:0px; padding: 5%;">
          <div class="col-md-12 text-center">
            @include('frontend.partials._messages')

            <form class="form-horizontal" action="store" method="POST">
              <!-- Text input-->


              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Product Name</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="name_pro" name="name_pro" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Quantity in stock</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="quantity" name="quantity" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Price per Unit</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <input id="price_pro" name="price_pro" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Category</label>
                </div>
                <div class="col-md-7 col-md-pull-1">
                  <select class="col-md-12" style="height:5%;" name="category_name">
                    <option selected="" value="Mobile">Mobile</option>
                    <option value="Tablet">Tablet</option>
                    <option value="Laptop">Laptop</option>
                    <option value="Motherboard">Motherboard</option>
                    <option value="Processor">Processor</option>
                  </select>
                </div>
              </div>
              <div class="form-group col-md-7 col-md-push-1">
              <br>
                <div class="col-md-7">
                  <button class="btn btn-success" type="submit" name="submit">Next Step</button>
                  <p class="text-muted">Add Images</p>
                </div>
                <div class="col-md-5 col-md-push-2">
                  <button class=" btn btn-success" type="clear">Cancel</button>
                </div>
              </div>
            
          </div>
        </div>
        </div>
      </div>
</div>
@endsection    
