@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <div class="col-md-5">
            <label>
              <h4>Products/Edit Products</h4>
            </label>
            @include('frontend.partials._messages')
          </div>
          <form class="form-horizontal" action="update_next/{{ $user->product_id}}" method="POST" enctype="multipart/form-data">


          {{method_field('patch')}}
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group col-md-7">
            <div class="col-md-3">
              <button type="submit" class="btn btn-success submit">Save:Next</button>
              <p class="text-muted">Images</p>
            </div>
            <div class="col-md-3">
              <button class="btn btn-success"><a style="color: blue;" href="update/{{ $user->product_id}}">Save:Exit</a></button>
            </div>
            <div class="col-md-3" style="margin-left:8%;">
              <button class=" btn btn-success"><a style="color: white;" href="ProductsPage">Cancel</a></button>
            </div>
          </div>
          <div class="col-md-12" style="border:1px solid; border-radius:0px;padding: 5%;">
            <div class="col-md-12 text-center">
              
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Product Name</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <input id="Productname" name="name_pro" placeholder="" class="form-control input-md" type="text" value="{{ $user->name_pro }}" >
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Quantity in stock</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <input id="Quantityinstock" name="quantity" placeholder="" class="form-control input-md" type="text" value="{{ $user->quantity }}">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Price per Unit</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <input id="Priceperunit" name="price_pro" placeholder="" class="form-control input-md" type="text" value="{{ $user->price_pro }}">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group col-md-12">
                  <div class="col-md-5 col-md-pull-1">
                    <label class="control-label" style="font-size:15px;" for="Title">Category</label>
                  </div>
                  <div class="col-md-7 col-md-pull-1">
                    <select class="col-md-12" style="height: 5%;" name="category_name">

                      <option value="Mobile" <?=$user->category_name == 'Mobile' ? ' selected="selected"' : '';?>>Mobiles</option>

                      <option value="Tablet" <?=$user->category_name == 'Tablet' ? ' selected="selected"' : '';?>>Tablets</option>

                      <option value="Laptop" <?=$user->category_name == 'Laptop' ? ' selected="selected"' : '';?>>Laptops</option>

                      <option value="Motherboard" <?=$user->category_name == 'Motherboard' ? ' selected="selected"' : '';?>>Motherboards</option>
                      
                      <option value="Processor" <?=$user->category_name == 'Processor' ? ' selected="selected"' : '';?>> Processors</option>

                    </select>
                  </div>
                </div>
                <!-- Text input-->
              </form>
            </div>
            </div>
          </div>
@endsection 
@section('script')
<script type="text/javascript">
$(function () {
            $("#fileupload").change(function () {
                if (typeof (FileReader) != "undefined") {
                    var dvPreview = $("#dvPreview");
                    dvPreview.html("");
                    var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                    $($(this)[0].files).each(function () {
                        var file = $(this);
                        if (regex.test(file[0].name.toLowerCase())) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                var img = $("<img />");
                                img.attr("style", "height:127px;width: 205px");
                                img.attr("src", e.target.result);
                                dvPreview.append(img);
                            }
                            reader.readAsDataURL(file[0]);
                        } else {
                            alert(file[0].name + " is not a valid image file.");
                            dvPreview.html("");
                            return false;
                        }
                    });
                } else {
                    alert("This browser does not support HTML5 FileReader.");
                }
            });
        });
</script>
<script type="text/javascript">
  $(function () {
    var dvPreview = $("#dvPreview");
    $('#deleteimg').click(function () {
       dvPreview.html("");         
    });
  });
</script>
@stop