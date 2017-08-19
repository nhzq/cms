@extends('layouts.app')

	@section('content')
	
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading">
                    All posts
                </div>
				<div class="panel-body">
					<table class="table table-power">
						<thead>
							<th>Image</th>
							<th>Title</th>
							<th>Edit</th>
                            <th>Delete</th>
						</thead>
						<tbody>		

							@if ($posts->count() > 0)

								@foreach($posts as $post)

									<tr>
										<td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
										<td>{{ $post->title }}</td>
										<td>
											<a href="{{ route('admin.post.edit', ['id' => $post->id]) }}" class="btn btn-info">Edit</a>
										</td>
										<td>
											<a href="{{ route('admin.post.delete', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
										</td>
									</tr>

								@endforeach

							@else

								<tr>
									<th colspan="5" class="text-center">No post</th>
								</tr>

							@endif

						</tbody>
					</table>
				</div>
			</div>
		</div>

	@endsection