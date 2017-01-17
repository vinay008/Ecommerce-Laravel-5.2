<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
	    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	    <!--For table -->
	    <link rel="stylesheet" href="{{asset('http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css')}}">

	    <!-- Include Date Range Picker -->
	    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css')}}">

	    <link rel="stylesheet" type="text/css" href="{{ asset('css/parsley.css') }}" >
	    <link href="{{asset('css\modal.css')}}" rel="stylesheet" type="text/css" >
	    <link href="{{asset('css\main.css')}}"  rel="stylesheet" type="text/css">
	    <link href="{{asset('css\style.css')}}" rel="stylesheet" type="text/css">
	    <link href="{{asset('css\slider.css')}}" rel="stylesheet" type="text/css" >
	    <link href="{{asset('css\tab.css')}}"   rel="stylesheet" type="text/css">
	    <link href="{{asset('css\hover-min.css')}}" rel="stylesheet" type="text/css" >

	</head>
	<body>
		@yield('content')
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
	    <script src="{{asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/slider.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/quantity.js')}}"></script>
	    <script type="text/javascript" src="{{asset('js/specificationtab.js')}}"></script>
	    <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>

   	    <script type="text/javascript" src="{{asset('http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js')}}"></script> 

	    <script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js')}}"></script>

	    <script type="text/javascript" src="{{asset('js/datepicker.js')}}"></script>
   	</body>
</html>
