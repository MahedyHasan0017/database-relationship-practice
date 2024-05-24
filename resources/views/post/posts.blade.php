@extends('main')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="">
                    All Posts
                </h2>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card__heading">
                                <div>
                                    {{ $post->title }}
                                </div>
                                <div>
                                    <a href="{{ route('single_post_view',['id' => $post->id]) }}" class="btn btn-success">
                                        details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                {{ $post->desc }}
                            </div>
                            <div>
                                <div>
                                    tags 
                                </div>
                                <div>
                                    @foreach ($post->tag as $tag)
                                        <span>
                                            <a href="{{ route('all_posts_with_tag_view',['tag' => $tag->tag_name]) }}">{{ $tag->tag_name }}</a>
                                        </span>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            @foreach ($post->comment as $comment)
                                <div>
                                    {{ $comment->message }}
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
