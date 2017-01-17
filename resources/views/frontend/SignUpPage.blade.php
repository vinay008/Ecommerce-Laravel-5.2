@extends('frontend.layout')
@include('frontend.partials.header1')
@section('title','Sign Up Page')
@section('content')

    <div class="col-md-push-1 container-fluid">
      <div class="col-md-push-1 well  col-md-10" style="border:1px solid; border-radius:0px;">
        @include('frontend.partials._messages')
        <!--First Part-->
        <div class="col-md-8" style="margin-top:-2.6%;margin-left:-2%;">
          <h3>Sign Up</h3>
          <br>
        </div>
        <div class="col-md-6 text-center">
         <form class="form-horizontal col-md-12 " method="POST" action="{{ url('/SignUpPage') }}" data-parsley-validate="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
           {{ csrf_field() }}
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="firstname">First Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Fname" name="firstname" placeholder="" class="form-control input-md" type="text" required>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="lastname">Last Name</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Lname" name="lastname" placeholder="" class="form-control input-md" type="text" required>
              </div>
            </div>
            <!-- Multiple Radios (inline) -->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="gender">Gender</label>
              </div>
              <div class=" col-md-7 col-md-pull-4">
                <label class="radio-inline col-md-push-1" for="radios-0">
                  <input name="gender" id="radios-0" value="male" checked="checked" style="font-size:15px;" type="radio">Male</label>
                <label class="radio-inline col-md-push-1" for="radios-1">
                  <input name="gender" id="radios-1" value="female" style="font-size:15px;" type="radio">Female</label>
              </div>
            </div>
            <div class="form-group col-md-12 ">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" for="dob">Date Of Birth</label>
              </div>
              <div class=" col-md-7 col-md-pull-2">
                <input class="form-control" id="date" name="dob" placeholder="MM/DD/YYYY" type="text" required>
                <label class="input-group col-md-push-12 col-md-1" for="date">
                  <li class="fa fa-2x fa-calendar pull-right"></li>
                </label>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="phone">Contact Number</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="ContactNum" name="phone" placeholder="" class="form-control input-md" type="text" required>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="email">Email</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="email" name="email" placeholder="" class="form-control input-md" type="email" required>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="password">Password</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="password" name="password" placeholder="" class="form-control input-md" type="password" required>
              </div>
            </div>
            <!-- Text input-->
            <div class="form-group col-md-12">
              <div class="col-md-5 col-md-pull-1">
                <label class="control-label" style="font-size:15px;" for="Re-password">Re-enter Password</label>
              </div>
              <div class="col-md-7 col-md-pull-2">
                <input id="Re-password" name="Re-password" placeholder="" class="form-control input-md" type="password" required>
              </div>
            </div>

              <!--Text Area-->
              <div class="form-group">
                <div class="col-md-5 col-md-pull-1">
                  <label class="control-label" style="font-size:15px;" for="address">Permanent Address</label>
                </div>
                <div class="col-md-7 col-md-pull-2">
                  <textarea rows="4" class="col-md-12" name="address" required></textarea>
                </div>
              </div>
              <!-- Button -->
              <div class="col-md-12">
                <!--DoBreak-->
                <br>
                <div class="form-group col-md-6 col-md-pull-2 ">
                  <button type="submit" class="btn btn-success">Sign Up</button>
                </div>
                <!-- Button -->
                <div class="form-group col-md-6 col-md-pull-3">
                  <button id="cancle" name="cancle" class="btn btn-success">Cancle</button>
                </div>
               
              </div>
           
          </form>

        
        </div>

      </div>
    </div>
@endsection