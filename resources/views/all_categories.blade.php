
@extends('main')


@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="">
                All Categories
            </h2>
        </div>
    </div>
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="card__heading">
                        <div>
                            {{$category->name}}
                        </div>
                        <div>
                            <button class="btn btn-success">
                                details
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{$category->sub_name}}
                </div>

                
                <div class="card-footer">

                   @foreach($category->product as $cat_pro)
                    <div>
                        {{$cat_pro->pro_name}}
                    </div>
                   @endforeach
                </div>
            
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection