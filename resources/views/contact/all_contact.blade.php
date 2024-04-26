@extends('main')


@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="">
                All Contacts
            </h2>
        </div>
    </div>
    <div class="row">
        @foreach($contacts as $contact)
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="card__heading">
                        <div>
                            {{$contact->user->email}}
                        </div>
                        <div>
                            <a href="{{route('single_contact_view',['id' => $contact->id])}}" class="btn btn-success">
                                details
                            </a>
                            <a href="{{route('single_contact_edit_view',['id' => $contact->id])}}" class="btn btn-warning">update contact</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {{$contact->number}}
                </div>

                
                <div class="card-footer">
                    {{$contact->city}}
                </div>
            
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection