@extends('backend.layout')
@include('backend.partials.header')
@section('content')
<div class="modal fade" id="myModalDele" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header" style="background-color:grey;">
                        <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Delete Static Page</h4>
                      </div>
                      <!-- Modal Body -->
                      <div class="modal-body">
                        <form role="form">
                          <div class="form-group">
                            <p>If You Delete This Static page,you will not be able See it  in fornt end.</p>
                            <p> Are you sure you want to Delete this static page?</p>
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
		                    <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Edit Static Page</h4>
		                  </div>
		                  <!-- Modal Body -->
		                  <div class="modal-body">
		                    <form role="form">
                          <div class="col-md-12"> 
                            <br/>
                          </div>

                           <!-- Text input-->
			              <div class="form-group col-md-12">
			                <div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">Name</label>
			                </div>
			                <div class="col-md-7 col-md-pull-3">
			                  <input id="Productname" name="Productname" placeholder="" class="form-control input-md" type="text" value="Offers">
			                </div>
			              </div>

			              <!-- Text input-->
			              <div class="form-group col-md-12">
			                <div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">URL</label>
			                </div>
			                <div class="col-md-7 col-md-pull-3">
			                  <input id="Productname" name="Productname" placeholder="" class="form-control input-md" type="text" value="ecom.com/offers">
			                </div>
			              </div>

                          <div class="form-group col-md-12 "> 

                          	<div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">Icon</label>
			                </div>

                              <div class="col-md-7 col-md-pull-3 ">
                                <div class="custom-file-upload">
                                        <!--<label for="file">File: </label>--> 
                                      <input type="file" id="file" readonly="readonly" name="myfiles[]" multiple />
                                 </div>
                              </div> 
                            </div>

			              <!-- Text input-->
			              <div class="form-group col-md-12">
			                <div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">Body</label>
			                </div>
			                <div class="col-md-7 col-md-pull-3">
			                  <textarea class="form-control" rows="5" id="bodycontent" >Body Content</textarea>
			                </div>
			              </div>
                              <div class="form-group">
                                <div class="col-md-12"><br/></div>
                                <button type="submit" class="btn btn-success col-md-offset-3 btn-responsive">Edit</button>
                                <button type="button" class="btn btn-success col-md-offset-2 btn-responsive" data-dismiss="modal">Cancle</button>
                              </div>
                              </form>
                          </div>
		                  </div>
		                </div>
		              </div>


<div class="modal fade" id="myModalPages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		              <div class="modal-dialog">
		                <div class="modal-content">
		                  <!-- Modal Header -->
		                  <div class="modal-header" style="background-color:grey;">
		                    <h4 class="modal-title" style="text-align:center;" id="myModalLabel">Add Static Page</h4>
		                  </div>
		                  <!-- Modal Body -->
		                  <div class="modal-body">
		                    <form role="form">
                          <div class="col-md-12"> 
                            <br/>
                          </div>

                           <!-- Text input-->
			              <div class="form-group col-md-12">
			                <div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">Name</label>
			                </div>
			                <div class="col-md-7 col-md-pull-3">
			                  <input id="Productname" name="Productname" placeholder="" class="form-control input-md" type="text" value="">
			                </div>
			              </div>

			              <!-- Text input-->
			              <div class="form-group col-md-12">
			                <div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">URL</label>
			                </div>
			                <div class="col-md-7 col-md-pull-3">
			                  <input id="Productname" name="Productname" placeholder="" class="form-control input-md" type="text" value="">
			                </div>
			              </div>

                          <div class="form-group col-md-12 "> 

                          	<div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">Icon</label>
			                </div>

                              <div class="col-md-7 col-md-pull-3">
                                <div class="custom-file-upload ">
                                        <!--<label for="file">File: </label>--> 
                                      <input type="file"  id="file" readonly="readonly" name="myfiles[]" multiple />
                                 </div>
                              </div> 
                        </div>

			              <!-- Text input-->
			              <div class="form-group col-md-12">
			                <div class="col-md-5">
			                  <label class="control-label" style="font-size:15px;" for="Title">Body</label>
			                </div>
                      
			                <div class="col-md-7 col-md-pull-3">
			                  <textarea class="form-control" rows="5" id="bodycontent" ></textarea>
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
          	<label ><h4 class="col-md-12">Static Pages</h4></label>
            </div>
          
            <div class="col-md-3 col-md-push-1 ">
               	<button type="button" class="btn btn-success col-md-8 btn-responsive" data-toggle="modal" data-target="#myModalPages">Add Static Pages</button>     
            </div>
          
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>Body</th>
                    <th>URL</th>
                    <th>Icon Name</th>
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
                    <td>Offers</td>
                    <td>Body Content</td>
                    <td>ecom.com/offers/</td>
                    <td>Offers.png</td>
                    <td>
                      <button class="btn tddata" data-toggle="modal" data-target="#myModalNorm">Edit</button><button class="btn tddata" data-toggle="modal" data-target="#myModalDele">Delete</button>
                    </td>
                  </tr>

				 <tr>
                    <td>2</td>
                    <td>sale</td>
                    <td>Body Content</td>
                    <td>ecom.com/sale/</td>
                    <td>sale.png</td>
                    <td>
                      <button class="btn tddata" data-toggle="modal" data-target="#myModalNorm">Edit</button><button class="btn tddata" data-toggle="modal" data-target="#myModalDele">Delete</button>
                    </td>
                  </tr>
                                        

                <tr>
	            	<td>3</td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
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
    <script type="text/javascript" src="js/addstatic.js"></script>  
@stop