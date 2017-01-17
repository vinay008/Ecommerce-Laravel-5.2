@extends('backend.layout')
@include('backend.partials.header')
@section('content')
    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px; padding-bottom:5%;">
          <div class="col-md-12">
            <label>
              <h4>Categories/Edit Category</h4>
            </label>
          </div>
          <div class="col-md-6 text-center">
		  
		  
            <form class="form-horizontal" action="updatecat/{{ $cat->category_id }}" method="POST" enctype="multipart/form-data">

          {{method_field('patch')}}
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
		  <!-- Text input-->
              <div class="form-group col-md-12">
              @include('frontend.partials._messages')
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Category Title</label>
                </div>
                <div class="col-md-7 col-md-pull-2">
                  <input id="ctitle" value="{{ $cat->category_name}}" name="category_name" placeholder="" class="form-control input-md" type="text">
                </div>
              </div>
              <!-- Multiple Radios (inline) -->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="radios">Is Visible</label>
                </div>
                <div class=" col-md-7 col-md-pull-4">
                  <label class="radio-inline col-md-push-1" for="radios-0">
                    <input name="isVisible" id="radios-0" value="True" <?= $cat->isVisible == 'True' ? ' checked="checked"' : '';?>  style="font-size:15px;" type="radio">True</label>
                  <label class="radio-inline col-md-push-1" for="radios-1">
                    <input name="isVisible" id="radios-1" value="False" <?= $cat->isVisible == 'False' ? ' checked="checked"' : '';?> style="font-size:15px;" type="radio">False</label>
                </div>
              </div>
              <div class="form-group col-md-10 ">
              
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" for="upload" contenteditable="true">Icon</label>
                </div>
              
                <div class="col-md-9 col-md-push-4 form-group" style="margin-top:-6%;">
                  <div class="input-group">
                  <input type="file" class="filestyle" name="images" id="fileupload" data-buttonText="Upload" value="{{ $cat->images }}">
                  </div>
                </div>
              
              </div>
              <!-- Text input-->
              <div class="form-group col-md-9">
                <div class="col-md-10 col-md-push-4">
                  <div id="dvPreview" style="border:1px solid; height:20%;">      
                  </div>
                </div>
                <div class="col-md-2 col-md-push-3">
                  <span class="glyphicon glyphicon-trash" id="deleteimg"></span>
                </div>
              </div>
			  
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <button class="btn btn-success">Save</button>
                </div>
                <div class="col-md-7 col-md-pull-3">
                  <button class=" btn btn-success">Cancel</button>
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
                                img.attr("style", "height:130px;width: 240px");
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
