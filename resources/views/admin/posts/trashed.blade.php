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
                            <th>Restore</th>
                            <th>Destroy</th>
						</thead>
						<tbody>		

                            @foreach($posts as $post)

                                <tr>
                                    <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                                    <td>{{ $post->title }}</td>
                                    <td>Edit</td>
                                    <td>
										<a href="" class="btn btn-danger">Trash</a>
									</td>
                                </tr>

                            @endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>

	@endsection