@extends('layouts.app')
@section('content')
    @include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
             Edit post
        </div>
        <div class="panel-body">
            <form action="{{ route('post.update', ['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" name="short_description" value="{{ $post->short_description }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category"  class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            @if($post->category->id == $category->id)
                                selected
                                    @endif

                            >{{ $category->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for="tags">Select tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                            <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"
                                @foreach($post->tags as $t)
                                    @if($tag->id == $t->id)
                                        checked
                                          @endif
                                        @endforeach

                                >{{$tag->tag}}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="details">Content</label>
                    <textarea name="details" id="content"  cols="5" rown="5" class="form-control">{{$post->details}}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('styles')
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
@stop

@section('scripts')

    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote();
        });
    </script>
@stop