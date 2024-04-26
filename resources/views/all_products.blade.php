@extends('main')


@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="">
                All Products
            </h2>
        </div>
    </div>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="card__heading">
                        <div>
                            {{$product->pro_name}}
                        </div>
                        <div>
                            <button class="btn btn-success">
                                details
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{$product->desc}}
                </div>

                
                <div class="card-footer">
                   @foreach($product->category as $pro_cat)
                    <div>
                        {{$pro_cat->name}}
                    </div>
                   @endforeach
                </div>
            
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection