<div class="col-xs-8">


    @foreach($posts_all as $post)

        <h2>
            <a href="#">{{ $post->title }}</a>
        </h2>
        <p class="lead">
            by <a href="index.php">Ryan LeMay</a>
        </p>
        <p>Category: {{ $post->category->name }} <span class="glyphicon glyphicon-time"></span> Posted {{ $post->created_at->diffForHumans() }}</p>
        <hr>
        <img class="img-responsive" src="{{ $post->featured }}" alt="{ $post->title }}">



        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#{{ $post->id }}">
                    <button class="btn btn-primary" type="button">
                        Read Post
                    </button> </a>
            </h4>
        </div>
        <div id="{{ $post->id }}" class="panel-collapse collapse">
            <div class="panel-body">
                <p> {!! $post->details !!} </p>
            </div>
            <div>
                <span class="glyphicon glyphicon-tags" style="color: gray"></span>
                @foreach($post->tags as $post_tag)
                    <a href="#"><span class="badge badge-primary">{{ $post_tag->tag }}</span></a>


                    @endforeach
            </div>
        </div>

        <div>


        </div>


        <hr>

@endforeach




<!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>

</div>