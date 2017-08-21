@extends('layouts.app')

@section('content')

    <div class="col-lg-8">

        @include('admin.includes.errors')

        <div class="panel panel-default">
            <div class="panel-heading">
                Create a new user
            </div>
            <div class="panel-body">
                <form action="{{ route('user.store') }}" method="post">

                    <!--Form token-->
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="name">User</label>
                        <input type="text" name="name" class="form-control">
                    </div>
					<div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Store user
                            </button>	
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection