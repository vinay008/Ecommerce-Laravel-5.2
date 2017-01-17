@extends('frontend.layout')
@include('frontend.partials.header3')
@section('content')

    <div class="col-md-push-1 container-fluid">
      <div class="col-md-push-1 well  col-md-10" style="border:1px solid; border-radius:0px;">
      <!--First Part-->
        <div class="col-md-8" style="margin-top:-2.6%;margin-left:-2%;">
          <h3>My Profile</h3>
          <br>
        </div>
         @if(Auth::check())
         <div class="col-md-6 text-center">
          @include('frontend.partials._messages')
          <form class="form-horizontal">
                  <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Fname">First Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Fname" name="Fname" placeholder="" class="form-control input-md" type="text" readonly value="{{Auth::user()->first_name }}">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Lname">Last Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Lname" name="Lname" placeholder="" class="form-control input-md" type="text" readonly value="{{Auth::user()->last_name }}">
              </div>
            </div>
                        <!-- Multiple Radios (inline) -->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="radios">Gender</label>
              </div>
              <div class=" col-md-7 col-md-pull-4" >
                <label class="radio-inline col-md-push-1" for="radios-0">
                      <input name="male" id="radios-0" value="male"  style="font-size:15px;" type="radio" @if( Auth::user()->gender=="male" ) checked="checked" @else   @endif>Male</label>
                  <label class="radio-inline col-md-push-1" for="radios-1">
                      <input name="female" id="radios-1" value="female" style="font-size:15px;" type="radio" @if( Auth::user()->gender=="female") checked="checked" @else @endif>Female</label>
                  </div>
              
            </div>


            <div class="form-group col-md-12 ">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" for="date">Date Of Birth</label>
              </div>
              <div class=" col-md-7 col-md-pull-2">
                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" readonly value="{{Auth::user()->dateofbirth }}">
                
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="ContactNum">Contact Number</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="ContactNum" name="ContactNum" placeholder="" class="form-control input-md" type="text" readonly value="{{Auth::user()->phone }}">
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="email">Email Address</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="email" name="email" placeholder="" class="form-control input-md" type="email" readonly value="{{Auth::user()->email}}">
              </div>
            </div>
            <div class="col-md-12">
              <br>
            </div>
          <!-- Text input-->
      </div>
      <div class="col-md-6 ">
          <!--Text Area-->
          <div class="form-group">
            <div class="col-md-2 col-md-push-8">
              <a href="UserMyProfilePageEdit"><button type="button" class="btn btn-success col-md-offset-2 btn-responsive">Edit</button></a>
            </div>
          </div>
          <div class="col-md-12">
            <br>
            <br>
          </div>
          <div class="form-group">
            <div class="col-md-5 col-md-pull-1">
              <label class="control-label" style="font-size:15px;" for="radios">Permanent Address</label>
            </div>
            <div class="col-md-7 col-md-pull-2">
              <textarea rows="4" class="col-md-12" name="permanentaddress" readonly>{{Auth::user()->address}}</textarea>
            </div>
          </div>
          <div class="col-md-12">
            <!--Pincode-->
            <div class="form-group">
              <div>
                <br>
              </div>
              
            </div>
          </div>
        </div>
    </div>
    @endif
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
    @endsection