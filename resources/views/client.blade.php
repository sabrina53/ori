@extends('layouts.app')
@section('section')

<div class="section" id="clientinfo">
	<div class="client_details">
	<h3 class=title id="client-title">{{ $client->company_name }}</h3>
		<div class="inline-item" id="inline-user">
			<img class="contact-icon" id="usercontact" src="/images/client-contact.svg">
		<h3 class=titles-proj>{{ $client->client_fname }} {{ $client->client_lname }}</h3>
		</div>
		<div class="inline-item" id="inline-address">
			<img class="contact-icon" id="useraddress" src="/images/address.svg"><h3 class=titles-proj>{{ $client->address}}</h3>
		</div><br>
		<div class="inline-item" id="inline-phone">
			<img class="contact-icon" id="phone" src="/images/phone.svg"><h3 class=titles-proj>{{ $client->number}}</h3>
		</div><br>
		<div class="inline-item" id="inline-email">
			<img class="contact-icon" id="email" src="/images/email.svg"><h3 class=titles-proj>{{ $client->email}}</h3>
		</div>
	</div>

	<div class="client-projs">
		<h2 class="project-title">Projects</h2>
		<div class="row" id="project-row">
		@for($i=0; $i< count($client->projects); $i++) 
			<div class="card-projs">
				<h4 class="clientCard-heading">{{ $client->projects[$i]->project_name }} </h4>
					<p class="item-proj">{{ $client->projects[$i]->estimated_due_date }}</p>
				<div class="double-btn" id="projcard">
					<div class="editproj">
                   		 <a href="{{ url('projects/show/') }}/{{ $client->id }}/{{'edit'}}" class="viewproject">Edit</a></h4>
                	</div>

                    <div class="viewproj">
                    	<a href="{{url('projects/show/') }}/{{ $client->id }}">View project</a>
                    </div>
                </div>
            </div>
        @endfor 
			
		</div>
		
	</div>
</div>
@endsection