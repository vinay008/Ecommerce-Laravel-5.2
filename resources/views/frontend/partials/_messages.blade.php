
  @if( Session::has('update') )
			<div class="col-md-7 center alert alert-success" role="alert">
     			<button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Successfully:</strong>{{ Session::get('update') }}
			</div>
  @endif

  @if( count($errors)>0 )
			<div class=" col-md-7 center  alert alert-danger" role="alert">
     			<button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Errors:</strong>
				<ul>
					@foreach($errors->all() as $error)
					  <li>{{ $error}}</li>
					@endforeach	
				</ul>
			</div>
  @endif