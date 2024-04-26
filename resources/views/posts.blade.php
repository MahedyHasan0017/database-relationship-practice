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
        @foreach($posts as $post)
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="card__heading">
                        <div>
                            {{$post->title}}
                        </div>
                        <div>
                            <button class="btn btn-success">
                                details
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @foreach($post->comment as $comment)
                        <div>
                            {{$comment->message}}
                        </div>
                    @endforeach
                </div>

                
                <div class="card-footer">
                   
                </div>
            
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection