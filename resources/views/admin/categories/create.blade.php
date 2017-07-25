@extends('layouts.app')
@section('content')
    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a new category
        </div>
        <div class="panel-body">
            <form action="{{ route('category.store') }}" method="post" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <div class="radio">
                        <label>
                            <input type="radio" name="menu_bar" id="optionsRadios1" value="1">
                            Show on Menu Bar
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="menu_bar" id="optionsRadios2" value="0" checked>
                            Dont Show on Menu Bar
                        </label>
                    </div>


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