@extends('layouts.app')

@section('content')

    <div class="col-lg-8">

        @include('admin.includes.errors')

        <div class="panel panel-default">
            <div class="panel-heading">
                Create a new tag
            </div>
            <div class="panel-body">
                <form action="{{ route('tag.store') }}" method="post">

                    <!--Form token-->
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label for="name">Tag</label>
                        <input type="text" name="tag" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button lcass="btn btn-success" type="submit">
                                Store tag
                            </button>	
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection