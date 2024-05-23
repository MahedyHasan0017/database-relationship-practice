@extends('main')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="">
                    Single Post
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div>post title</div>
                            <h3>{{ $post->title }}</h3>
                        </div>
                        <div>
                            <div>post description</div>
                            {{ $post->desc }}
                        </div>
                    </div>
                    <div class="card-footer">
                        <div>
                            <h5>comments</h5>
                        </div>
                        <div>
                            <form action="{{ route('single_post_comment_store', ['id' => $post->id]) }}" method="post">
                                @csrf
                                <div>
                                    <textarea name="message" id="" cols="" rows="5" class="form-control"></textarea>
                                </div>



                                @if ($user != null)
                                    <div class="mt-3">
                                        <button class="btn btn-primary">
                                            comment
                                        </button>
                                    </div>
                                @else
                                    <div class="mt-3">
                                        Please Login to submit a comment 
                                    </div>
                                @endif


                            </form>
                        </div>
                        <div>

                            @foreach ($post->comment as $comment)
                                <div class="post__comment">
                                    <div>
                                        <div>
                                            <small>user name</small>
                                        </div>
                                        {{ $comment->user->name }}
                                    </div>
                                    <div>
                                        <div>
                                            <small>comment message</small>
                                        </div>
                                        {{ $comment->message }}
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
