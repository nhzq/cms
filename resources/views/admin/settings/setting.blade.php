@extends('layouts.app')

@section('content')

    <div class="col-lg-8">

        @include('admin.includes.errors')

        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Blog Setting
            </div>
            <div class="panel-body">
                <form action="{{ route('setting.update') }}" method="post">

                    <!--Form token-->
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="name">Site name</label>
                        <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">Contact Number</label>
                        <input type="text" name="contact_number" value="{{ $settings->contact_number}}" class="form-control">
                    </div>
					<div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Update Setting
                            </button>	
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection