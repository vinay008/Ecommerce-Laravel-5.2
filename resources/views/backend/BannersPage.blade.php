@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="modal fade" id="myModalDele" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header" style="background-color:grey;">
                        <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Delete Banner</h4>
                      </div>
                      <!-- Modal Body -->
                      <div class="modal-body">
                        <form role="form">
                          <div class="form-group">
                            <p>If You Delete This Banner,you will no longer See it  in fornt end or backed.</p>
                            <p> Are you sure you want to Delete this banner?</p>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success col-md-offset-3 btn-responsive">Delete</button>
                            <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancle</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
</div>


  <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		              <div class="modal-dialog">
		                <div class="modal-content">
		                  <!-- Modal Header -->
		                  <div class="modal-header" style="background-color:grey;">
		                    <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Add Banner</h4>
		                  </div>
		                  <!-- Modal Body -->
		                  <div class="modal-body">
		                    <form role="form">
                          <div class="col-md-10 col-md-push-3">
                            <label>Select an image to add in banner list.</label> 
                          </div>
                          <div class="col-md-12"> 
                            <br/>
                          </div>
                          <div class="form-group col-md-12 ">                          
                              <div class="col-md-7 col-md-push-2">
                                <div class="file col-md-7">
                                  <input type="file" name="file" id="id_media">
                                  <span class="value"></span>
                                  <span class="bt-value">Upload</span>
                                </div>
                              </div> 
                              <div class="col-md-5 col-md-push-2" style="margin-top:1.5%; ">
                                <span class="glyphicon glyphicon-trash"></span>
                              </div>
                            </div>

                              <div class="form-group">
                                <div class="col-md-12"><br/></div>
                                <button type="submit" class="btn btn-success col-md-offset-3 btn-responsive">Add</button>
                                <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancle</button>
                              </div>
                              </form>
                          </div>
		                  </div>
		                </div>
		              </div>

  <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          @include('frontend.partials._messages')
          <div class="col-md-9">
          	<label ><h4 class="col-md-12">Banners</h4></label>
            </div>
          
            <div class="col-md-3 col-md-push-1 ">
               	<button type="button" class="btn btn-success col-md-8 btn-responsive" data-toggle="modal" data-target="#myModalNorm">Add Banners</button>     
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Image Name</th>
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
                    <td>1</td>
                    <td>Banner1.jpg</td>
                    <td>
                      <button class="btn tddata" data-toggle="modal" data-target="#myModalDele">Delete</button>
                    </td>
                  </tr>
                    
                <tr>
	            	<td>2</td>
	            	<td>Banner2.jpg</td>
	            	<td>
	           			<button class="btn tddata" data-toggle="modal" data-target="#myModalDele">Delete</button>       
	            	</td>
                </tr>                  

                <tr>
	            	<td>3</td>
	            	<td></td>
	            	<td></td>      
                </tr>  

                </tbody>
              </table>
            </div>      
      </div>
      </div>
      </div>
@endsection    

@section('script')
<script type="text/javascript" src="js/simpletable.js"></script>
<script type="text/javascript" src="js/file.js"></script>
@stop    

   