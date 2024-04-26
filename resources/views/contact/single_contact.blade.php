@extends('main')


@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="">
                Single Contact
            </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-header">
                    <div class="card__heading">
                        <div>
                            {{$contact->user->email}}
                        </div>
                        <div>
                            <form action="{{route('single_contact_delete',['id' => $contact->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    delete
                                </button>
                            </form>

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
    </div>
</div>



@endsection