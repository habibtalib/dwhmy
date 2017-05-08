@extends ('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{$post->title}}</h1>
        <p class="blog-post-meta">

            {{$post->created_at->toFormattedDateString()}} by <a href="#">{{ $post->user->name }}</a></p>
        @if (count($post->tag))
            <ul>
                @foreach ($post->tag as $tag)
                    <li><a href="/post/tag/{{$tag->name}}"> {{$tag->name}}</a></li>
                @endforeach
        @endif

        {{$post->body}}

        <div class="comment">
            <ul class="list-group">
                @foreach ($post->comments as $comment )
                    <li class="list-group-item">
                        <p>
                        <strong>
                            {{$comment->user->name  }}   :
                        </strong>
                        {{ $comment->body }}
                        [{{ $comment->created_at->diffForHumans() }}]
                        </p>
                    </li>
                @endforeach
            </ul>

        </div>
        @if (Auth::check())
        <hr>

        <div class="card">
            <div class="card-block">

                <form method="POST" action="/post/{{ $post->id }}/comment">

                    {{ csrf_field() }}
                    {{-- method_field('PATCH') --}}
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here." class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>

                @include('layouts.errors')
            </div>
        </div>
        @endif
    </div>


@endsection
