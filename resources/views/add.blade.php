@extends('layouts.app')

@section('content')
<form method="POST" action="/addPost">
	{{ csrf_field() }}
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-warning">
			<div class="panel-heading">Add
				@if(Session('Success'))
				<div class="alert-success pull-right">{{ Session('Success') }} </div>
				@endif
			</div>
			<div class="panel-body">
				<input type="text" name="name" class="form-control" placeholder="Name">
				<br>
				<input type="email" name="email" class="form-control" placeholder="Email">
				<br>
				<textarea name="message" class="form-control" placeholder="Message" rows="5"></textarea>
			</div>
			<div class="panel-footer clearfix">
				<button type="submit" class="btn btn-success pull-left">Submit</button>
				<button type="reset" class="btn btn-danger pull-right">Clear</button>
			</div>
		</div>
	</div>
</form>
@endsection