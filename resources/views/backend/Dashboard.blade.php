@extends('backend.layout')
@include('backend.partials.header')
@section('content')
 
    <div class="col-md-push-1  col-md-10 container-fluid">
      <div class="col-md-12 ">
        <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
          <div class="container col-md-12">
            <label class="col-md-1">DASHBOARD</label>
            <div class="col-md-3 col-md-push-5">
              <div class="col-md-12 col-md-pull-1">
                <label class="col-md-1 col-md-pull-1">TO</label>
                <input class="col-md-7" id="date" name="date" placeholder="/    /" type="text">
                <label class="input-group  col-md-1" for="date">
                  <li class="fa fa-2x fa-calendar pull-right"></li>
                </label>
              </div>
            </div>
            <div class="col-md-3 col-md-push-5">
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
          

          <div class="col-md-12" style=" border:1px solid black; margin-top: -2%;">
             <div id="chart" class="col-md-12">              
             </div>
          </div>


          <div class="container col-md-12 col-md-pull-1">
            
            <div class="col-md-3 col-md-push-1" style=" border:1px solid;margin-top:5%; width: 27%;height:30%;">
              <lable>
                  <h4>Most Sold Products</h4>
              </lable>

              <ul class="nav nav-pills nav-stacked">
                <li><img src="img/SoldProducts1.jpg" class="img-responsive center-block col-md-4" style="height:100px; width:80px; margin-left:-10%;"></li>
               
                <li><img src="img/SoldProducts2.jpg" class="img-responsive center-block col-md-4" style="height:100px; width:80px;"></li>

                <li><img src="img/SoldProducts3.jpg" class="img-responsive center-block col-md-3" style="height:100px; width:80px;"></li>
              </ul>

            </div>
            
            <div class="col-md-3 col-md-push-2" style=" border:1px solid; margin-top: 5%; width:27% ;height:30%;">
              <lable>
                <h4>Most Profitable Products</h4>
              </lable>

              <ul class="nav nav-pills nav-stacked">
                <li><img src="img/MostProfitable1.jpg" class="img-responsive center-block col-md-6" style="height:100px; margin-left:-10%;"></li>
               
                <li><img src="img/MostProfitable2.jpg" class="img-responsive center-block col-md-6" style="height:100px;"></li>
              </ul>


            </div>
            
            <div class="col-md-3 col-md-push-3 " style=" border:1px solid; margin-top: 5%; width: 27%;height:30%;">
              <lable>
                <h4>Most Important Clients</h4>
              </lable>

              <ul class="nav nav-pills nav-stacked">
                <li><img src="img/MostImportant1.jpg" class="img-responsive center-block col-md-5" style="height:100px;  margin-left:-10%;"></li>
               
                <li><img src="img/MostImportant2.jpg" class="img-responsive center-block col-md-7" style="height:100px;"></li>
              </ul>


            </div>
          
          </div>

        </div>
      </div>
    </div>
  @endsection

@section('script')

    <script type="text/javascript" src="{{ asset ('js/d3.v3.min.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('js/c3.min.js') }}" charset="utf-8"></script>
    <script type="text/javascript" src="{{ asset('js/charts.js') }}" charset="utf-8"></script>
    
@stop
