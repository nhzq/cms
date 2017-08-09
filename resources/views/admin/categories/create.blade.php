@extends('layouts.app')
	
	@section('content')
	
		<div class="col-lg-8">

			@if(count($errors) > 0)

				<ul class="list-group">

					@foreach($errors->all() as $error)

						<li class="list-group-item text-danger">
							{{ $error }}
						</li>

					@endforeach

				</ul>

			@endif

			<div class="panel panel-default">
				<div class="panel-heading">
					Create a new category
				</div>
				<div class="panel-body">
					<form action="{{ route('category.store') }}" method="post">

						<!--Form token-->
						{{ csrf_field() }}
						
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<div class="text-center">
								<button lcass="btn btn-success" type="submit">
									Store post
								</button>	
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>

	@endsection