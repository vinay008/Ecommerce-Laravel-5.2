@extends('backend.layout')
@include('backend.partials.header')
@section('content')
    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px; padding-bottom:5%;">
          <div class="col-md-12">
            <label>
              <h3>Attribute/Edit Attribute {{ $category_name }}</h3>
            </label><br/><br/>
          </div>
          <div class="col-md-6 text-center">


            <form class="form-horizontal" action="updateattr/{{ $attr->attribute_id }}" method="POST">
              <!-- Text input-->
              @include('frontend.partials._messages')

               {{method_field('patch')}}


              <input type="hidden" name="_token" value="{{ csrf_token() }}">



              <!-- Text input-->
              <div class="form-group col-md-12">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="Title">Attribute Name</label>
                </div>
                <div class="col-md-7 col-md-pull-2">
                  <input id="atitle" name="attribute_name" placeholder=""  value="{{ $attr->attribute_name }}"   class="form-control input-md" type="text">
                </div>
              </div>
              <input type="hidden" name="category_id" value="{{ $category_id }}">

              <input type="hidden" name="category_name" value="{{ $category_name }}">
              <!-- Multiple Radios (inline) -->
                   <button class="btn btn-success col-md-5" style="text-decoration:none;color: white;margin-top:8%;" type="submit" name="submit">Edit
                   </button>
                </div>
                <div class="col-md-6 col-md-push-0" style="margin-top:8%; margin-left:-16%">
                  <button class="btn btn-success col-md-5" type="reset">Cancel</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
