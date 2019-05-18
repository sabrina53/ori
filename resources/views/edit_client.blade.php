@extends('layouts.app')
@section('section')

<div class="section">
    <div class="formCon">
         <div id="clientForm">
            <h3 class=title>Update Client</h3>
	           <form method="post" action="{{ url('clients/show/') }}/{{ $client->id }}" enctype="multipart/form-data">
		              {{ method_field('PUT') }}
		              {{ csrf_field() }}
                   <div class="clientgrid">
                        <div id="clientbox1"> 
                            First Name: <input type="text" name="client_fname" id="client_fname" class="form-control" value="{{ $client->client_fname }}"><br>
                            Last Name: <input type="text" name="client_lname" id="client_lname"  class="form-control"value="{{ $client->client_lname }}"><br>
                            Business Type: <input type="text" name="business_type" id="business_type"  class="form-control"value="{{ $client->business_type }}"><br>
                        </div>


                         <div class="clientbox2">
                        <br>
                        <br>
                            Address: <input type="text" name="address" id="client_address" class="form-control" value="{{ $client->address }}"><br>
                            Contact Number: <input type="text" name="number" id="client_number"  class="form-control" value="{{ $client->number }}"><br>
                            Email: <input type="text" name="email" id="client_email"  class="form-control" value="{{ $client->email }}"><br>
                            <button type="submit" class="btn-primary" id="edit-btn" value="Save">Update</button>
                    </form> 
           
        </div>
    </div>
</div>
    @endsection

