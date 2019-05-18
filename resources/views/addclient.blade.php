@extends('layouts.app')
@section('section')


        <div id="errors">
    @if($errors->any())
    <h3>some errors were found:</h3>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
</ul>
    @endif
</div>
    
<div class="section">

<div class="formCon">
  <div id="clientForm"> 
        <form method="post" action="{{ url('clients/add') }}" enctype="multipart/form-data">
        <div class="clientgrid">
                    {{ csrf_field()}}

            <div id="clientbox1">
                <h3 class=title>Create a New Client</h3>
                <p>Frist time working with this client? Fill out the form below! </p>

               <br>
                <h3 class="titles-projBrand"> Brand Name:</h3> <input type="text" name="company_name" id="company_name" class="form-control" value="{{ old('company_name') }}">

                First Name: <input type="text" name="client_fname" id="client_fname" class="form-control" value="{{ old('client_fname') }}">
                Last Name: <input type="text" name="client_lname" id="client_lname"  class="form-control"value="{{ old('client_lname') }}">
                Business Type: <input type="text" name="business_type" id="business_type"  class="form-control"value="{{ old('business_type') }}">
            </div>

            <div id="clientbox2">
                <br>
                <br>
                <br>
                <br>
                <br>
                Address: <input type="text" name="address" id="client_address" class="form-control" value="{{ old('address') }}">
                Contact Number: <input type="text" name="number" id="client_number"  class="form-control" value="{{ old('number') }}">
                Email: <input type="text" name="email" id="client_email"  class="form-control" value="{{ old('email') }}">
                <br>
                <button type="submit" onclick="sweetalertclick()" class="btn-primary" id="formbtn"value="Add">Add</button>
            </div>
            </form> 
        </div>
  </div>
</div>
</div>

<script>
    function sweetalertclick(){
        Swal('Hello World')
    }
</script>
	
@endsection