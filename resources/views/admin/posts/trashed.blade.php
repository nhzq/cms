@extends('layouts.app')

	@section('content')
	
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading">
                    Trashed post
                </div>
				<div class="panel-body">
					<table class="table table-power">
						<thead>
							<th>Image</th>
							<th>Title</th>
							<th>Edit</th>
                            <th>Restore</th>
                            <th>Destroy</th>
						</thead>
						<tbody>		

							@if ($posts->count() > 0)

								@foreach($posts as $post)

									<tr>
										<td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
										<td>{{ $post->title }}</td>
										<td>Edit</td>
										<td>
											<a href="{{ route('admin.post.restore', ['id' => $post->id]) }}" class="btn btn-success">Restore</a>
										</td>
										<td>
											<a href="{{ route('admin.post.kill', ['id' => $post->id]) }}" class="btn btn-danger">Delete</a>
										</td>
									</tr>

								@endforeach

							@else

								<tr>
									<th colspan="5" class="text-center">No trashed post</th>
								</tr>			

							@endif

						</tbody>
					</table>
				</div>
			</div>
		</div>

	@endsection