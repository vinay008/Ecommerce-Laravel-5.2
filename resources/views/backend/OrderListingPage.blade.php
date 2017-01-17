@extends('backend.layout')
@include('backend.partials.header')
@section('content')
    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <label class="col-md-1"><h3>Orders</h3></label>
          <div class="container col-md-12">
            <div class="col-md-3 col-md-push-3">
              <div class="col-md-12 col-md-pull-1">
                <label class="col-md-1 col-md-pull-1">TO</label>
                <input class="col-md-7" id="date" name="date" placeholder="/    /" type="text">
                <label class="input-group  col-md-1" for="date">
                  <li class="fa fa-2x fa-calendar pull-right"></li>
                </label>
              </div>
            </div>
            <div class="col-md-3 col-md-push-3">
              <div class="col-md-12 col-md-push-2">
              @include('frontend.partials._messages')
                <label class="col-md-1 col-md-pull-2">FROM</label>
                <input class="col-md-7 " id="date1" name="date1" placeholder="/    /" type="text">
                <label class="input-group col-md-1" for="date1">
                  <li class="fa fa-2x fa-calendar pull-right"></li>
                </label>
              </div>
            </div>
          </div>
            <div class="col-md-12 table-responsive" style="margin-top: -6.5%">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Username</th>
                    <th>Ordered On</th>
                    <th>Payment Type</th>
                    <th>Status</th>
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
                    <td>123@gmail.com</td>
                    <td>1/02/16</td>
                    <td>Cash On Delivery</td>
                    <td>
	                    <select id="status">
					        <option selected value="Delivered">Delivered</option>
					        <option value="Pending">Pending</option>
						</select>
					</td>
                  </tr>
                    
                    <tr>
	                    <td>2</td>
	                    <td>456@gmail.com</td>
	                    <td>13/09/15</td>
	                    <td>Cash On Delivery</td>
	                    <td>
		                    <select id="status">
						        <option value="Delivered">Delivered</option>
						        <option selected  value="Pending">Pending</option>
							</select>
						</td>
                  </tr>

                <tr>
	            	<td>3</td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td></td>      
                </tr>


                <tr>
	            	<td>4</td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td></td>      
                </tr>

                  


                <tr>
	            	<td>5</td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td></td>      
                </tr>

                  


                <tr>
	            	<td>6</td>
	            	<td></td>
	            	<td></td>
	            	<td></td>
	            	<td></td>      
                </tr>

                  


                <tr>
	            	<td>7</td>
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
<script type="text/javascript" src="js/simpletableuser.js"></script>
@stop
  