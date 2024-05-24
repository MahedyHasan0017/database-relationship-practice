@extends('main')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="">
                    All Posts With This Tag
                </h2>
            </div>
        </div>
        <div class="row">


            @foreach ($posts as $tag)
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-header">
                            {{ $tag->post->title }}
                        </div>
                        <div class="card-body">
                            {{ $tag->post->desc }}
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
