<html>

		<head>	
			<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
		    <!-- Include Date Range Picker -->

		    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css">
		    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

		    <link rel="stylesheet" type="text/css" href="{{ asset('css/parsley.css') }}" >
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\modal.css') }}">
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\main.css') }}" >
		        
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\slider.css') }}">
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\tab.css')  }}" >

		    <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css') }}">
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\hover-min.css') }}" >
		    
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\stable.css') }}" >
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\addstatic.css') }}">
		        
		    <link rel="stylesheet" type="text/css" href="{{ asset('css\file.css') }}">
		    <link rel="stylesheet" type="text/css" href="{{ asset('http://fonts.googleapis.com/css?family=Cookie') }}">
		    
		    <link rel="stylesheet" type="text/css" href="{{ asset('css/c3.css') }}" >

		</head>
   <body>
 
	@yield('content')

 	<script type="text/javascript" src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/file.js') }}"></script>
    <script type="text/javascript" src="{{ asset('http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-filestyle/1.2.1/bootstrap-filestyle.js') }}"></script>
 
    @yield('script')<!-- This to include your script-->	
   </body> 
    
</html>