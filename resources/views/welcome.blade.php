@extends('main')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="">
                Home page
            </h2>
            <h3>Welcome {{$user->email}}</h3>
            <div>
                <a href="{{route('login_action')}}" class="btn btn-danger">
                    Logout
                </a>
            </div>
        </div>
    </div>

</div>

@endsection