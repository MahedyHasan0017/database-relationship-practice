<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-project</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('../assets/css/style.css')}}">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <style>
        ul,
        li {
            list-style: none;
        }

        .header_list {
            display: flex;
            align-items: center;
            margin-top: 20px;
            gap: 15px;
        }

        .post__comment{
            display: flex;
            justify-content:space-between ; 
            border : 1px solid #ddd ; 
            padding : 10px ; 
            margin: 10px 0; 
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <ul class="header_list">
                <li><a href="{{route('home')}}" class="btn btn-primary">Home</a></li>
                <li><a href="{{route('register_view')}}" class="btn btn-primary">Register</a></li>
                <li><a href="{{route('login_view')}}" class="btn btn-primary">Login</a></li>
                <li><a href="{{route('users_view')}}" class="btn btn-primary">Users</a></li>
                <li><a href="{{route('add_contact_view')}}" class="btn btn-primary">Add Contact</a></li>
                <li><a href="{{route('all_contact_view')}}" class="btn btn-primary">Contacts</a></li>
                <li><a href="{{route('all_posts_view')}}" class="btn btn-primary">All Posts</a></li>
                <li><a href="{{route('add_post_form')}}" class="btn btn-primary">Add Post</a></li>
                <li><a href="{{route('all_comments')}}" class="btn btn-primary">All Comments</a></li>
                <li><a href="{{route('all_products')}}" class="btn btn-primary">All Products</a></li>
                <li><a href="{{route('add_product')}}" class="btn btn-primary">Add Product</a></li>
                <li><a href="{{route('all_categories')}}" class="btn btn-primary">All Categories</a></li>
            </ul>
        </div>
    </div>