@extends('main')


@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="">
                All Comments
            </h2>
        </div>
    </div>
    <div class="row">
        @foreach($comments as $comment)
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="card__heading">
                        <div>
                            {{$comment->message}}
                        </div>
                        <div>
                            <button class="btn btn-success">
                                details
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                   {{$comment->post->title}}
                </div>

                
                <div class="card-footer">
                   
                </div>
            
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection