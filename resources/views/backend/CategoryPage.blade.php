@extends('backend.layout')
@include('backend.partials.header')
@section('content')
  <!-- Modal -->

    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          
          <div class="col-md-3 col-md-push-2">
          	<label ><h3 class="col-md-4 col-md-pull-12">Categories</h3></label>
            </div>
          @include('frontend.partials._messages')
            <div class="col-md-3 col-md-push-7">
               	<a href="CategoryPageAddCategory"><button type="button" class="btn btn-success col-md-8 btn-responsive">Add Categories</button></a>
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Category</th>
                    <th>Is Visible</th>
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
                  @foreach($cat as $values)
                    <td>{{ $values->category_id }}</td>
                    <td>{{ $values->category_name }}</td>
                    <td><input type="checkbox" name="vehicle" checked value="True">{{ $values->isVisible }}</td>
                    <td>
                    <a class="btn tddata" style="text-decoration:none;color:blue;" href="editcat/{{ $values->category_id }}">Edit</a>
                    <button class="btn tddata" data-toggle="modal" data-target="#myModalNorm{{$values->category_id}}">Delete</button>




                  <form action="CategoryPageListattributes" method="POST">
                  
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">


                  <input type="hidden" id="category_id" name="category_id" class="category_id" value="{{ $values->category_id }}">
                  
                  <input type="hidden" id="category_name" name="category_name" class="category_name" value="{{ $values->category_name }}">

                    <button class="btn tddata" type="submit" name="submit">List Attributes</button>

                  </form>




                    </td>
                      <div class="modal fade" id="myModalNorm{{$values->category_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <a class="btn btn-success col-md-offset-3 btn-responsive" href="deletecat/{{ $values->category_id }}">Delete</a>
                            <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancel</button>
                            
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
  </div>

                  </tr>

                   @endforeach 
                   
                </tbody>
              </table>
            </div>      
      </div>
      </div>
      </div>
 @endsection

 @section('script')
<script type="text/javascript" src="js/simpletable.js"></script>
@stop
       