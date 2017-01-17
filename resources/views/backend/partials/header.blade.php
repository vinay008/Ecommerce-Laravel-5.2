<nav class="navbar navbar-default navbar-static-center col-md-10" style="margin-left:8%;">
  <div class="container-fluid">
    <h2 class="text-info text-left" id="head">ShopUp</h2>
    <br/>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="border: 1px solid black; ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a href="{{ asset('Dashboard') }}" style=" margin-left:2%; padding:15px; font-size:15px; " class="glyphicon glyphicon-home navbar-brand">&nbsp;Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:black; margin-bottom:10px; padding:-10px; border-radius:3px;">
      <ul class="nav navbar-nav">
            
            <li>
              <a href="{{ asset('OrderListingPage') }}" style=" padding:15px;" class="hvr-bounce-to-bottom"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Orders</a>
            </li>
            <li>
              <a href="{{ asset('CategoryPage') }}" style=" padding:15px;" class="hvr-bounce-to-bottom"><span class="glyphicon glyphicon-list"></span>&nbsp;Categories</a>
            </li>
            <li>
              <a href="{{ asset('ProductsPage') }}" style=" padding:15px;" class="hvr-bounce-to-bottom"><span class="glyphicon glyphicon-shopping-cart">Products</a>
            </li>
            <li>
              <a href="{{ asset('BannersPage') }}" style=" padding:15px;" class="hvr-bounce-to-bottom"><span class="glyphicon glyphicon-blackboard"></span>&nbsp;Banners</a>
            </li>
            <li>
              <a href="{{ asset('StaticPages') }}" style=" padding:15px;" class="hvr-bounce-to-bottom"><span class="glyphicon glyphicon-duplicate"></span>&nbsp;Static Pages</a>
            </li>
          </ul>

            <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
             @if(Auth::check())
              <a href="#" style="text-decoration:none;padding:15px;" class=" hvr-bounce-to-bottom dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp;{{Auth::user()->first_name }}
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                 <li><a href="{{route('logout')}}"> Logout</a></li>
                 @else
                 <a href="{{route('login')}}" class="btn btn-default">Sign In</a>
                 @endif
              </ul>
            </li>
          </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
<br/>
<br/>
</nav>
