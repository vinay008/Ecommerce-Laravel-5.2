@extends('backend.layout')
@include('backend.partials.header')
@section('content')

<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          
          <div class="col-md-9">
          	<label ><h4 class="col-md-12">Enter Product Attribute Value {{ $product_id }}   {{ $category_name }}</h4></label>
            </div>
          
            <div class="col-md-3 col-md-push-1 ">
               @include('frontend.partials._messages')
            </div>
            
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Attribute Name</th>
                    <th>Attribute Value</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th id="FooterHidden"></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Attribute ka Naam</td>
                    <td>
                    	<div class="col-md-7 col-md-pull-0">
                	    <input id="aname" name="attribute_name" placeholder="" class="form-control input-md" type="text">
                		</div>
                	</td>
                    </tr>
                  
                </tbody>
              </table>
            </div>      
      </div>
      </div>
      </div>
@endsection    

@section('script')
<script type="text/javascript" src="js/simpletableuser.js"></script>
@stop
