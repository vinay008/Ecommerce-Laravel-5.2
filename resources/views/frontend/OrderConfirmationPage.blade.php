@extends('frontend.layout')
@include('frontend.partials.header2')
@section('content')
    <div class=" colo-md-10 container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-push-1">
        @include('frontend.partials._messages')
          <!--Upper part-->
          <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
            <div class="col-md-12">
              <h4>Order Confirmed</h4>
            </div>
            <div class="col-md-12">
              <h4>Congratulations.</h4>
            </div>
            <div class="col-md-12">
              <h4>Your Order For Following Product Has Been Placed Successfully It Will
                Be Processed And Dispatched Immediately You Are Likely TO Receive It In
                8-9 Days</h4>
              <br>
            </div>
            <div class="col-md-12"></div>
            <div class="col-md-12">
              <h4>Thank You For Shopping With Us.</h4>
              <br>
              <br>
            </div>
             <div class="col-md-12 table-responsive">
                  <table id="myTable" class="table  table-bordered table-striped">
                    <thead style="background-color:#bdbdbd;">
                     <tr>
                  <th>Sr No</th>
                  <th>Product Name</th>
                  <th>Categeory</th>
                  <th>Ordered On</th>
                  <th>Price</th>
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
                  <td>Redmin Note 3</td>
                  <td>Mobiles</td>
                  <td>Date</td>
                  <td>12000/-</td>
                  <td>Pending</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Moto G4 plus</td>
                  <td>Mobiles</td>
                  <td>Date</td>
                  <td>13000/-</td>
                  <td>Pending</td>
                </tr>
              </tbody>
                  </table>
                </div>
            </table>
            <div>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/simpletable.js"></script> 
	@endsection