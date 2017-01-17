@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <div class="col-md-12">
            <label>
              <h4>Products/Add Products</h4>
            </label>
          </div>
          <div class="col-md-12" style="border:1px solid; border-radius:0px; padding: 5%;">
          @include('frontend.partials._messages')
          
            <form class="form-horizontal" action="storeImg_pro" method="POST" enctype="multipart/form-data">
              <!-- Text input-->


              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="product_id" value="{{ $product_id }}">

              <div class="row">
          
          <div class="col-md-6 text-center" style=" margin-top:-1%;">            
              <div class="form-group col-md-12 ">
                <div class="col-md-3 col-md-pull-2;">
                  <label class="control-label" for="upload">Images</label>
                </div>
                
                <div class="col-md-8 col-md-push-0">
                  <div class="input-group">
                  <input type="file" class="filestyle" name="files[]" id="fileupload" data-buttonText="Upload" multiple="true">
                  </div>
                </div>
 
              
              </div>
              <!-- Text input-->
               <div class="form-group col-md-9">
                <div class="col-md-10 col-md-push-4">
                  <div id="dvPreview" style="border:1px solid;">      
                  </div>
                </div>
                <div class="col-md-2 col-md-push-3">
                  <span class="glyphicon glyphicon-trash" id="deleteimg"></span>
                </div>
              </div>
              </div>
              </div>
              <!-- Text input-->
              <div class="row">
              <div class="form-group col-md-6">
                <div class="col-md-6">
                  <button class="btn btn-success" type="submit" name="submit">Add Product</button>
                </div>
                <div class="col-md-6">
                  <button class=" btn btn-success" type="clear">Cancel</button>
                </div>
              </div>
              </div>
            </form>
            </div>
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