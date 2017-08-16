@extends('layouts.app')

	@section('content')
	
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-power">
						<thead>
							<th>Image</th>
							<th>Title</th>
							<th>Edit</th>
                            <th>Delete</th>
						</thead>
						<tbody>		

                            @foreach($posts as $post)

                                <tr>
                                    <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                                    <td>{{ $post->title }}</td>
                                    <td>Edit</td>
                                    <td>
										<a href="{{ route('admin.post.delete', [id => $post->id]) }}" class="btn btn-danger">Delete</a>
									</td>
                                </tr>

                            @endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>

	@endsection