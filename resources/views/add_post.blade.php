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
                    <form action="" method="post">
                        <div class="card-body">
                            <div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="post title" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="post description" name="" id="" cols="10"
                                        rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" id="" class="form-control"
                                        placeholder="tag use space to separate" />
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
