
@extends('main')

@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="h2">
                    Register
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{route('register_store')}}" method="post">
                @csrf 
                <div class="mb-3">
                    <label for="user_name" class="form-label">User Name</label>
                    <input type="text" class="form-control" name="user_name" id="user_name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection 
   