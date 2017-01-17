@extends('frontend.layout')
@include('frontend.partials.header1')
@section('content')
        <div class="col-md-push-1  col-md-10 container-fluid">
            <div class="col-md-12 ">
                <div class="col-md-12  text-justify well well-lg" style="border:1px solid; border-radius:0px;">
                @include('frontend.partials._messages')
                    <div class="col-md-6">
                        <a href="ProductDetailsPage"><img src="img/banner.jpg" class="img-responsive" style="border:1px solid ; border-radius:0px;"></a>
                    </div>
                    <div class="col-md-6">
                        <a href="ProductDetailsPage"><img src="img/banner_1.jpg" class="img-responsive" style="border:1px solid ; border-radius:0px;"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-push-1  col-md-10  container-fluid">
            <div class="col-md-12 ">
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
        <div class="col-md-push-1  col-md-10  container-fluid">
            <div class="col-md-12 ">
                <div class="col-md-12   text-justify well well-lg" style="border:1px solid ; border-radius:0px;">
                    <h3 class="col-md-12 " style="top:-35px; left:-10px; ">New products</h3>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:-1.6%;">
                        <a href="ProductDetailsPage"><img src="{{$settingsArray[4]}}" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.5%;">
                        <a href="ProductDetailsPage"><img src="{{$settingsArray[5]}}" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.4%; ">
                        <a href="ProductDetailsPage"><img src="{{$settingsArray[6]}}" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                    <div class="col-md-3 well" style="border:1px solid; top:-10px; border:1px solid ; margin-left:0.7%;">
                        <a href="ProductDetailsPage"><img src="{{$settingsArray[7]}}" class="img-responsive center-block" style="height:160px;"></a>
                    </div>
                </div>
            </div>
        </div>
@endsection
    