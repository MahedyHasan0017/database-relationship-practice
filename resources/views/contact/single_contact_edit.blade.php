@extends('main')


@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="h2">
                Edit Contact
            </div>
        </div>
    </div>
    <div class="row">
        <form id="myForm" action="{{route('single_contact_edit_store')}}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3" style="display: none;">
                <label for="contact_id" class="form-label">Contact Id</label>
                <input type="text" value="{{$contact->id}}" class="form-control" name="contact_id" id="contact_id">
                @error('contact_id')
                <div style="color : red">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" value="{{$contact->addess}}" class="form-control" name="address" id="address">
                @error('address')
                <div style="color : red">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="text" value="{{$contact->number}}" class="form-control" name="number" id="number">
                @error('number')
                <div style="color : red">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" value="{{$contact->city}}" class="form-control" name="city" id="city">
                @error('city')
                <div style="color : red">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary submit_button">Submit</button>
        </form>
    </div>
</div>



@push('js')


<script>
    $(document).ready(function() {
        $(document).on('click', '.submit_button', function(e) {
            e.preventDefault();
            const contact_id = $('#contact_id').val();
            const address = $('#address').val();
            const number = $('#number').val();
            const city = $('#city').val();

            const data = {
                contact_id: contact_id,
                address: address,
                number: number,
                city: city
            }

            // log

            $.ajax({
                url: '/single-contact/edit/store',
                method: 'post',
                data: data,
                success: function(resp) {
                    console.log(resp);
                    window.location = resp.url
                },
                error: function(err) {
                    console.log(err);
                }
            });

        });
    });
</script>


@endpush


@endsection