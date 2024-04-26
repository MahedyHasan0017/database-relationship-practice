
@extends('main')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="h2">
                    Login
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{route('login_store')}}" method="post">
                @csrf 
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

@endsection 
   