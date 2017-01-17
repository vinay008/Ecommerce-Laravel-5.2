<nav class="navbar navbar-default navbar-static-center col-md-10" style="margin-left:8%;">
  <div class="container-fluid">
    <h2 class="text-info text-left" id="head">ShopUp</h2>
    <br/>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="border: 1px solid black;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a href="index" style=" margin-left:2%; padding:15px; font-size:15px; " class="navbar-brand">&nbsp;Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:black; margin-bottom:10px; padding:-10px; border-radius:3px;">
      <ul class="nav navbar-nav">
        <li>
      <a href="ProductCategoriesPage" style=" padding:15px;" class="hvr-bounce-to-bottom"><i class="fa fa-asterisk fa-fw"></i>Mobiles</a>
        </li>
    <li>
      <a href="ProductCategoriesPage" style=" padding:15px;" class="hvr-bounce-to-bottom"><i class="fa fa-asterisk fa-fw"></i>Tablets</a>
    </li>
    <li>
      <a href="ProductCategoriesPage" style=" padding:15px;" class="hvr-bounce-to-bottom"><i class="fa fa-asterisk fa-fw"></i>Laptops</a>
      </li>
    <li>
      <a href="ProductCategoriesPage" style=" padding:15px;" class="hvr-bounce-to-bottom"><i class="fa fa-asterisk fa-fw"></i>Motherboards</a>     
    </li>
    <li>
      <a href="ProductCategoriesPage" style=" padding:15px;" class="hvr-bounce-to-bottom"><i class="fa fa-asterisk fa-fw"></i>Processor</a>
        </li>
    <li>
      <a href="ProductCategoriesPage" style=" padding:15px;" class="hvr-bounce-to-bottom"><i class="fa fa-asterisk fa-fw"></i>Offers</a>
        </li>
    
    <li>
      <a href="ProductCategoriesPage" style=" padding:15px;" class="hvr-bounce-to-bottom"><i class="fa fa-asterisk fa-fw"></i>Sales</a>
    </li> 
            
    <li class="dropdown">
          <a href="#" class="hvr-bounce-to-bottom dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Profile
      <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=" UserMyProfilePage">Your Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    

      <ul class="nav navbar-nav navbar-right">
         @if(Auth::check())
         <li class="dropdown">
          <a href="#" style="text-decoration:underline;padding:15px;" class=" hvr-bounce-to-bottom dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i></i>welcome,{{Auth::user()->first_name}}
      <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="UserMyProfilePage"> My Profile</a></li>
            <li><a href="{{route('logout')}}"> Logout</a></li>
             @else
             <a href="{{route('login')}}" class="btn btn-default">Sign In</a>
             @endif

      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
<br/>
<br/>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
</script>