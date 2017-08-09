@extends('layouts.app')

	@section('content')
	
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-power">
						<thead>
							<th>Category name</th>
							<th>Editing</th>
							<th>Deleting</th>
						</thead>
						<tbody>

							@foreach($categories as $category)

								<tr>
									<td>
										{{$category->name}}
									</td>
								</tr>

							@endforeach

						</tbody>
					</table>
				</div>
			</div>
		</div>

	@endsection