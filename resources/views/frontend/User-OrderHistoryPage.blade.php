@extends('frontend.layout')
@include('frontend.partials.header2')
@section('content')
    <div class=" colo-md-10 container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-push-1">
          <!--Lower part-->
          <div class="col-md-12  text-justify well " style="border:1px solid; border-radius:0px;">
            <div class="col-md-12">
              @include('frontend.partials._messages')
              <h3>Order Histroy</h3>
            </div>
            <div class="col-md-12 table-responsive">
              <table id="myTable" class="table  table-bordered table-striped">
                <thead style="background-color:#bdbdbd;">
                  <tr>
                    <th>Sr No</th>
                    <th>Product Name</th>
                    <th>Categeory</th>
                    <th>Quantity</th>
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
                    <td>1</td>
                    <td>Date</td>
                    <td>12000/-</td>
                    <td>Pending</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Moto G4 plus</td>
                    <td>Mobiles</td>
                    <td>1</td>
                    <td>Date</td>
                    <td>13000/-</td>
                    <td>Delivered</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Moto Z4</td>
                    <td>Mobiles</td>
                    <td>1</td>
                    <td>Date</td>
                    <td>11000/-</td>
                    <td>Pending</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
     <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/simpletableuser.js"></script>
@endsection