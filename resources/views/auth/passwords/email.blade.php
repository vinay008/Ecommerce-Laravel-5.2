@extends('frontend.layout')
@include('frontend.partials.header1')
@section('content')
    <div class="col-md-push-1 container-fluid">
      <div class="col-md-push-1 well  col-md-10" style="border:1px solid; border-radius:0px;">
        <!--First Part-->
        <div class="col-md-12">
          <h3>Reset Password</h3>
          <br>

          @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        
        </div>
        <div class="col-md-5 row-md-12 " style="border:1px solid black; border-radius:2px;">
          
          <form class="form-horizontal"  method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}
            <!-- Text input-->
            <div class="col-md-12">
              <br>
            </div>
            <div class="fform-group col-md-12 {{ $errors->has('email') ? ' has-error' : '' }}">
              <div class=" col-md-10 	">
                <label class="control-label" style="font-size:15px;" for="email">Enter Your Email</label>
              </div>
              <div class="col-md-11 ">
                <input id="username" name="email" class="form-control input-md" type="text" value="{{ old('email') }}">
                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>
            </div>
            <div class="col-md-12">
              <br>
              <br>
            </div>
            <div class="form-group col-md-7">
              <button class="btn btn-success btn-responsive col-md-12 " type="submit" style="text-decoration: none; color:white;">Send me reset password link</button>
            </div>
          </form>
        
        </div>
      </div>
    </div>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  @endsection