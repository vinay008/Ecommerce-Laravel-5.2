@extends('frontend.layout')
@include('frontend.partials.header1')
@section('title','Sign In Page')
@section('content')
    <div class="col-md-push-1 container-fluid">
      <div class="col-md-push-1 well  col-md-10" style="border:1px solid; border-radius:0px;">
        @include('frontend.partials._messages')
        <!--First Part-->
        <div class="col-md-12">
          <h3>Sign In</h3>
          <br>
        </div>
        <div class="col-md-5 " style="border:1px solid black; border-radius:2px;">
          
          <form class="form-horizontal col-md-12" method="POST" action="{{ url('/SignInPage') }}">
           {{ csrf_field()}}
              <!-- Text input-->
              <div class="col-md-12">
                <br>
              </div>
              <div class="form-group col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                <div class=" col-md-5 col-md-push-3">
                  <label class="control-label" style="font-size:20px;" for="emailid">Email Id</label>
                </div>
                <div class="col-md-12">
                  <br>
                </div>
                <div class="col-md-11">
                  <input id="emailid" name="email" class="form-control input-md" type="text" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                </div>
              </div>
              <!-- Text input-->
              <div class="col-md-12">
                <br>
              </div>
              <div class="form-group col-md-12 {{ $errors->has('password') ? ' has-error' : '' }} ">
                <div class=" col-md-10 col-md-push-3">
                  <label class="control-label" style="font-size:20px;" for="usernameL">Password</label>
                </div>
                <div class="col-md-12">
                  <br>
                </div>
                <div class="col-md-11">
                  <input id="password" name="password" class="form-control input-md" type="password" required>
                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </div>
              </div>
              <!-- Text input-->
              <div class="col-md-12">
                <br>
              </div>
              <div class="form-group col-md-12">
                <div class=" col-md-7 col-md-push-4">
                  <button id="signin" class="btn btn-success  btn-responsive" name="signin" type="submit">Sign in</button>
                </div>
              </div>
              <div class="form-group col-md-12">
                <div class="col-md-12 col-md-push-4">
                    <a class="btn btn-link col-md-8 col-md-pull-2"  style="font-size:17px; color:#1e88e5;text-decoration:underline;" href="{{url('reset')}}">Forgot Password?</a>
                </div>
                <div class="col-md-12"> 
                <br/>
                </div>
              </div>      
              </div>
          </form>

        </div>
      </div>
    </div>
@endsection