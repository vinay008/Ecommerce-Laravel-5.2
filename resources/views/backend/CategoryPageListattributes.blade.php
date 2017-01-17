@extends('backend.layout')
@include('backend.partials.header')
@section('content')

    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          
          <div class="col-md-9">


          	<label ><h2 class="col-md-12">List Attributes for Category for {{ $category_name }} &nbsp;&nbsp;</h2></label>
            </div>
          
            <div class="col-md-3 col-md-push-1 ">
              @include('frontend.partials._messages')
            	<form action="AddAttributes" method="POST">

            	<input type="hidden" name="_token" value="{{ csrf_token() }}">


                  <input type="hidden" id="category_id" name="category_id" class="category_id" value="{{ $category_id }}">
                  
                  <input type="hidden" id="category_name" name="category_name" class="category_name" value="{{ $category_name }}">


               	<button type="submit" class="btn btn-success col-md-8 btn-responsive">Add Attributes</button></a>     
               	</form>
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Attribute Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th id="FooterHidden"></th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                   @foreach($attr as $values)
                    <td>{{ $values->attribute_id }}</td>
                    <td>{{ $values->attribute_name }}</td>
                    <td>

                    <form action="editattr/{{ $values->attribute_id }}" method="POST">

            	<input type="hidden" name="_token" value="{{ csrf_token() }}">


                  <input type="hidden" id="category_id" name="category_id" class="category_id" value="{{ $category_id }}">
                  
                  <input type="hidden" id="category_name" name="category_name" class="category_name" value="{{ $category_name }}">

                   <button class="btn tddata" style="text-decoration:none;margin-top:5%;" type="submit" name="submit">Edit
                   </button>

               	</form>




                       	
                       <button class="btn tddata" data-toggle="modal" data-target="#myModalNorm{{$values->attribute_id}}">Delete</button>


                       <div class="modal fade" id="myModalNorm{{$values->attribute_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header" style="background-color:grey;">
                        <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Delete Category</h4>
                      </div>
                      <!-- Modal Body -->
                      <div class="modal-body">
                        <form role="form">
                          <div class="form-group">
                            <p>If You Delete This Category,you will no longer See it  in fornt end.</p>
                            <p>Are you sure you want to Delete this category?</p>
                          </div>
                          <div class="form-group">
                            <a class="btn btn-success col-md-offset-3 btn-responsive" href="deleteattr/{{ $values->attribute_id }}">Delete</a>
                            <button type="button" type="reset" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancel</button>
                            
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
 				 </div>



                    </td>
                  </tr>
                    @endforeach
                <tr>
	            	
                </tbody>
              </table>
            </div>      
      </div>
      </div>
      </div>
    <script type="text/javascript" src="js/simpletable.js"></script>
@endsection

@section('script')
<script type="text/javascript" src="js/simpletable.js"></script>
@stop
