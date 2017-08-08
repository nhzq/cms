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
					Create a new post
				</div>
				<div class="panel-body">
					<form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">

						<!--Form token-->
						{{ csrf_field() }}
						
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" name="title" class="form-control">
						</div>
						<div class="form-group">
							<label for="featured">Featured image</label>
							<input type="file" name="featured" class="form-control">
						</div>
						<div class="form-group">
							<label for="content">Content</label>
							<textarea name="content" id="content" cols="5" row="5" class="form-control"></textarea>
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