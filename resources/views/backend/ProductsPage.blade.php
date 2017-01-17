@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          
          <div class="col-md-9">
          	<label ><h4 class="col-md-12">Products</h4></label>
            </div>
          
            <div class="col-md-3 col-md-push-1 ">
              @include('frontend.partials._messages')
               @foreach($user as $values)
                <form type="POST" action="ProductsPageAddProduct">

                <input type="hidden" name="product_id" value="{{ $values->product_id }}">
                <input type="hidden" name="category_name" value="{{ $values->category_name }}">
                @endforeach
               	  <button type="submit" class="btn btn-success col-md-8 btn-responsive">Add Products</button>
                </form>
 
            </div>
            
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price Per Unit</th>
                    <th>Units in Inventory</th>
                    <th>Added On</th>
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
                  @foreach($user as $values)
                    <td>{{ $values->product_id }}</td>
                    <td>{{ $values->name_pro }}</td>
                    <td>{{ $values->category_name }}</td>
                    <td>{{ $values->price_pro }}</td>
                    <td>{{ $values->quantity }}</td>
                    <td>{{ $values->created_at }}</td>
                    <td>
                    <!--<button class="btn tddata"><a href="ProductsPageEditProduct" >Edit</a></button>-->
                    <a class="btn tddata" style="text-decoration:none;color:blue;" href="edit/{{ $values->product_id}}">Edit</a>
                    

                    
                    <button class="btn tddata" data-toggle="modal" data-target="#myModalDele{{$values->product_id}}">Delete</button>

                    <div class="modal fade" id="myModalDele{{$values->product_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header" style="background-color:grey;">
                        <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Delete Product</h4>
                      </div>
                      <!-- Modal Body -->
                      <div class="modal-body">
                        <form role="form" >
                          <div class="form-group">
                            <p>If You Delete This Product,you will no longer See it  in front end or backend.</p>
                            <p> Are you sure you want to Delete this product?</p>
                          </div>
                          <div class="form-group">                     
                            <a class="btn btn-success col-md-offset-3 btn-responsive" href="delete/{{ $values->product_id }}">Delete</a>
                            <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancel</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                   </td>
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
<script type="text/javascript" src="js/simpletableuser.js"></script>
@stop
