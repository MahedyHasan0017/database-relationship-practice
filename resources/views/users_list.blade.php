@extends('main')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="">
                All Users
            </h2>
        </div>
    </div>
    <div class="row">
        @foreach($users as $user)
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="card__heading">
                        <div>
                            {{$user->name}}
                        </div>
                        <div>
                            <button class="btn btn-success">
                                details
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{$user->email}}
                </div>

                
                <div class="card-footer">
                    {{$user->contact->number}}
                </div>
            
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection