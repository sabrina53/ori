@extends('layouts.app')
@section('section')

<div class="section" id="client_list" >
	<h1 id="list_heading">Client List</h1>
<div class="row" >

	@foreach($clients as $client)
	<div class="clientbox"> 
	<h4 class="client_name">{{ $client->company_name }}</h4>
	<button class="clientbtn">
	 	<a href="{{ url('clients/show/') }}/{{ $client->id }}/{{'edit'}}"id="editcli">Edit</a>
	 	<a href="{{ url('clients/show/') }}/{{ $client->id }}" id="previewcli">Client Info</a>
	</button>
	</div>
	@endforeach
</div>
</div>

@endsection
 