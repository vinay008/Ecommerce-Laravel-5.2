@extends('frontend.layout')
@include('frontend.partials.header1')
@section('content')
  <div class="col-md-11   col-md-push-1 container-fluid text-justify">
      <div calss="col-md-12">
        <div class="col-md-3    well  container-fluid" style="border:1px solid ; border-radius:0px; height:94%;">
          <h3 style=" margin-top:-10px;">Search Filter</h3>
          <p class="col-md-12 well" style=" margin-top:10px; font-size:18">Search filters will be specific to category type These are nothing but
            attribute set in the backend while creating categories and adding their
            attributes</p>
        </div>
        <div class="col-md-8   container-fluid">
          <div class="col-md-12 ">
            <div class="col-md-12   well" style="border:1px solid ; border-radius:0px;">
              <h3 class="col-md-12 " style="top:-35px; left:-10px; ">Search Results</h3>
              <div class="col-md-12  col-md-pull-1" style=" top:-40px;">
                      @include('frontend.partials._messages')
                <h3 class="col-md-1   col-md-push-5" style=" margin-top:3.5%; font-size:21px;">Sort</h3>
                <select style="margin-top:3.8%; margin-left:1%; ">
                  <option>Price: Low to High</option>
                  <option>Price: High to Low</option>
                  <option>Newest First</option>
                  <option>Oldest First</option>
                </select>
                <ul class="pagination col-md-5 col-md-push-8">
                  <li>
                    <a href="#" class="col-md-2">Prev</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">1</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">2</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">3</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-1">4</a>
                  </li>
                  <li>
                    <a href="#" class="col-md-2">Next</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-30px;  border:1px solid ; border-radius:0px; margin-left:-1.6%">
                <a href="ProductDetailsPage"><img src="{{$settingsArray[0]}}" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-30px;  border:1px solid ; border-radius:0px; margin-left:0.5%;">
                <a href="ProductDetailsPage"><img src="{{$settingsArray[2]}}" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-30px;  border:1px solid ; border-radius:0px; margin-left:0.4%; ">
                <a href="ProductDetailsPage"><img src="{{$settingsArray[1]}}"class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-12">
                <br>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-10px; border:1px solid ; border-radius:0px; margin-left:-1.6%;">
                <a href="ProductDetailsPage"><img src="{{$settingsArray[3]}}" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-10px; border:1px solid ; border-radius:0px; margin-left:0.5%;">
                <a href="ProductDetailsPage"><img src="{{$settingsArray[5]}}" class="img-responsive center-block" style="height:160px;"></a>
              </div>
              <div class="col-md-4 well" style="border:1px solid; top:-10px; border:1px solid ; border-radius:0px; margin-left:0.4%;">
                <a href="ProductDetailsPage"><img src="{{$settingsArray[4]}}" class="img-responsive center-block" style="height:160px;"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-11 container">
        <div class="col-md-12 text-justify well well-lg" style="border:1px solid ; border-radius:0px;">
          <h3 class="col-md-12 " style="top:-35px; left:-10px; ">Top selling products</h3>
          <div class="col-md-3 well " style="border:1px solid; top:-10px; border:1px solid ; margin-left:-1.6%;">
            <a href="ProductDetailsPage"><img src="{{$settingsArray[0]}}" class="img-responsive center-block" style="height:160px;"></a>
          </div>
          <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.5%;">
            <a href="ProductDetailsPage"><img src="{{$settingsArray[2]}}" class="img-responsive center-block" style="height:160px;"></a>
          </div>
          <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.4%;">
            <a href="ProductDetailsPage"><img src="{{$settingsArray[1]}}" class="img-responsive center-block" style="height:160px;"></a>
          </div>
          <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.7%; ">
            <a href="ProductDetailsPage"><img src="{{$settingsArray[3]}}" class="img-responsive center-block" style="height:160px;"></a>
          </div>
        </div>
      </div>
  </div>
@endsection