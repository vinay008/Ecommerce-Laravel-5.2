@extends('backend.layout')
@include('backend.partials.header')
@section('content')


    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          @include('frontend.partials._messages')
          <div class="col-md-9">
          	<label ><h4 class="col-md-12"> Categories {Category name} Product Listing</h4></label>
            </div>
          
            <div class="col-md-4 col-md-push-9 " style="margin-top: -3%;">
               	
               	
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>

                    <th>Sr No</th>
                    <th>Product Name</th>
                    <th>Price per Unit</th>
                    <th>Quantity in Inventory</th>
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
                    <td>{{ $values->price_pro }}</td>
                    <td>{{ $values->quantity }}</td>
                    <td>
                    <!-- <a class="btn tddata" style="text-decoration:none;color:blue;" href="edit/{{ $values->product_id }}">Reassign</a> --> 
                    <a class="btn tddata" style="text-decoration:none;color:blue;" href="editlist/{{ $values->product_id }}">Edit</a>

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
		                    <form role="form">
		                      <div class="form-group">
		                        <p>If You Delete This Product,you will no longer See it  in fornt end or backed.</p>
                            <p> Are you sure you want to Delete this product?</p>
		                      </div>
		                      <div class="form-group">
		                        <a class="btn btn-success col-md-offset-3 btn-responsive" href="deletelist/{{ $values->product_id }}">Delete</a>
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

            <div class="col-md-4 col-md-push-9 " style="margin-top: -22%;">
               	
              
            <button type="button" class="btn btn-success col-md-8 btn-responsive" data-toggle="modal" data-target="#myModalNorm{{ $values->category_name }}">Reassign All Products</button>
                  <div class="modal fade" id="myModalNorm{{ $values->category_name }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		              <div class="modal-dialog">
		                <div class= "modal-content">
		                  <!-- Modal Header -->
		                  <div class="modal-header" style="background-color:grey;">
		                    <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Reassign All Products</h4>
		                  </div><br/>
		                  <!-- Modal Body -->
		                  <div class="modal-body">
		                    <form role="form">
		                    	<label>Please select a category below to reassign all products to</label>

		                      <div class="form-group col-md-12">
		                       <label class="col-md-3">Reassign to</label>
		                       
		                       <select class="col-md-4 col-md-pull-0" style="height: 5%;" name="category_name">

								<option value="Mobile" <?=$values->category_name == 'Mobile' ? ' selected="selected"' : '';?>>Mobiles</option>

                      			<option value="Tablet" <?=$values->category_name == 'Tablet' ? ' selected="selected"' : '';?>>Tablets</option>

                      			<option value="Laptop" <?=$values->category_name == 'Laptop' ? ' selected="selected"' : '';?>>Laptops</option>

                      			<option value="Motherboard" <?=$values->category_name == 'Motherboard' ? ' selected="selected"' : '';?>>Motherboards</option>
                      
                      			<option value="Processor" <?=$values->category_name == 'Processor' ? ' selected="selected"' : '';?>> Processors</option>

								
								</select> 
								
		                      </div>
		                      
		                      <div class="form-group">
		                        <div class="col-md-12"><br/></div>
		                        <a class="btn btn-success col-md-offset-3 btn-responsive" href="reassignList/{{ $values->category_name }}">Reassign</a>
		                        <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancel</button>
		                      </div>
						</form>
					  </div>
					</div>
				</div>
			</div>
			</div>      
      </div>
     
      </div>
      </div>
@endsection    

@section('script')
  <script type="text/javascript" src="js/simpletableuser.js"></script>
@stop