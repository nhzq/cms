@extends('layouts.app')
	
	@section('content')
	
		<div class="col-lg-8">

			@include('admin.includes.errors')

			<div class="panel panel-default">
				<div class="panel-heading">
					Update category: {{ $category->name }}
				</div>
				<div class="panel-body">
					<form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">

						<!--Form token-->
						{{ csrf_field() }}
						
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" value="{{ $category->name }}" class="form-control">
						</div>
						<div class="form-group">
							<div class="text-center">
								<button lcass="btn btn-success" type="submit">
									Update category
								</button>	
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>

	@endsection