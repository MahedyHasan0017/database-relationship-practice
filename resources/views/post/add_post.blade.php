@extends('main')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="">
                    Add Post
                </h2>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 mt-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card__heading">
                            <div>
                                Add Post And Tags
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                    <form action="{{ route('add_post_store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name='title' id='title'
                                        placeholder="post title" />

                                    <div style="display: block ; margin-bottom:15px">
                                        @error('title')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="post description" name="description" id="description" cols="10"
                                        rows="5"></textarea>
                                    <div style="display: block ; margin-bottom:15px">
                                        @error('description')
                                            <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tag" id="tag" class="form-control"
                                        placeholder="tag use space or comma to separate" />

                                </div>

                            </div>
                        </div>


                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-success">Submit Post</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
