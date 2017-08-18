@extends('layouts.app')
	
	@section('content')
	
		<div class="col-lg-8">

			@include('admin.includes.errors')

			<div class="panel panel-default">
				<div class="panel-heading">
					Edit: {{ $post->title }}
				</div>
				<div class="panel-body">
					<form action="{{ route('admin.post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">

						<!--Form token-->
						{{ csrf_field() }}
						
						<div class="form-group">
							<label for="title">Title</label>
							<input type="text" name="title" class="form-control" value="{{ $post->title }}">
						</div>
						<div class="form-group">
							<label for="featured">Featured image</label>
							<input type="file" name="featured" class="form-control">
						</div>
						<div class="form-group">
							<label for="category">Select a Category</label>
							<select name="category_id" id="category" class="form-control">
								
								@foreach($categories as $category)
									
									<option value="{{ $category->id }}">{{ $category->name }}</option>

								@endforeach
							
							</select>
						</div>
						<div class="form-group">
							<label for="content">Content</label>
							<textarea name="content" id="content" cols="5" row="5" class="form-control">{{ $post->content }}</textarea>
						</div>
						<div class="form-group">
							<div class="text-center">
								<button lcass="btn btn-success" type="submit">
									Update post
								</button>	
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>

	@endsection