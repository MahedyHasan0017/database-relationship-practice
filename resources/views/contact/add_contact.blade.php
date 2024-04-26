@extends('main')

@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="h2">
                Add Contact
            </div>
        </div>
    </div>
    <div class="row">
        <form id="myForm" action="{{route('add_contact_store')}}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3" style="display: none ;">
                <label for="user_id" class="form-label">user Id</label>
                <input type="text" value="{{$user->id}}" class="form-control" name="user_id" id="user_id">
                @error('user_id')
                <div style="color : red">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address">
                @error('address')
                <div style="color : red">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Number</label>
                <input type="text" class="form-control" name="number" id="number">
                @error('number')
                <div style="color : red">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="city">
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
    $(document).ready(function(){
        $(document).on('click','.submit_button',function(e){
            e.preventDefault();
            const user_id = $('#user_id').val() ; 
            const address = $('#address').val() ; 
            const number = $('#number').val() ; 
            const city = $('#city').val() ; 

            const data = {
                user_id : user_id , 
                address : address , 
                number : number , 
                city : city 
            }

            // log

            $.ajax({
                url: '/add-contact/store',
                method : 'post' ,
                data : data ,
                success : function(resp){
                    console.log(resp);
                    window.location = resp.url
                },
                error : function(err){
                    console.log(err);
                }
            });

        });
    });
</script>

<!-- 
<script>
    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault(); 

            var formData = $(this).serialize() ; 

            $.ajax({
                type: 'POST', 
                url: $(this).attr('action'), 
                data: formData, 
                success: function(response) {
                    console.log(response); 
                    alert(response.message);
                },
                error: function(error) {
                    console.error(error); 
                    alert('Error submitting form!');
                }
            });
        });
    });
</script> -->
@endpush

@endsection