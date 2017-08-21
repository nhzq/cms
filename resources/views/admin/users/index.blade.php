@extends('layouts.app')

	@section('content')
	
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading">
                    Users
                </div>
				<div class="panel-body">
					<table class="table table-power">
						<thead>
							<th>Image</th>
							<th>Name</th>
							<th>Permissions</th>
                            <th>Delete</th>
						</thead>
						<tbody>		

							@if ($users->count() > 0)

								@foreach($users as $user)

                                    <tr>
                                        <td>
                                            <img src="{{ asset($user->profile->avatar) }}" alt="" width="40px" height="40px" style="radius: 60%;">
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>

                                            @if ($user->admin)

											<a href="{{ route('user.notadmin', ['id' => $user->id]) }}" class="btn btn-danger">Remove Permission</a>

											@else

												<a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-success">Make Admin</a>

											@endif

                                        </td>
                                        <td>
                                            Delete
                                        </td>
                                    </tr>
									
								@endforeach

							@else

								<tr>
									<th colspan="5" class="text-center">No user</th>
								</tr>

							@endif

						</tbody>
					</table>
				</div>
			</div>
		</div>

	@endsection