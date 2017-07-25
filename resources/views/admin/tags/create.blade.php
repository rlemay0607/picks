@extends('layouts.app')
@section('content')
    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new tag
        </div>
        <div class="panel-body">
            <form action="{{ route('tag.store') }}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="tag" class="form-control">
                </div>


                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection