@extends('layouts.app')
@section('section')



<div class="section" id="projectsCon">
<div class="projectInfo">
	<div class="project_items">
		<h3 class=title>{{ $project->project_name }}</h3>
			<h3 class=titles-proj>Project Description:</h3><p class="item-para" id="proj-descrip">{{ $project->project_descrip }}</p>
		<div class="inline-item">
			<h3 class=titles-proj>Estimated Due Date</h3><p class="item-para">{{ $project->estimated_due_date }}</p>
		</div>
		<div class="inline-item">
			<h3 class=titles-proj>Start Date</h3><p class="item-para">{{ $project->start_date }}</p>
		</div>
		<div class="inline-item">
			<h3 class=titles-proj>End Date</h3><p class="item-para"> {{ $project->end_date }}</p>
		</div><br>
	
	</div>
	<div id="clientInfoCon">
	<div class="clientDetails">
		<h3 class="title">Client info</h3>
		 <div class="inline-item">
		 	<h3 class=titles-proj>First Name:</h3>
			<p class="item-para">{{ $project->client->client_fname }}</p>
		</div>
		<div class="inline-item">
		 	<h3 class=titles-proj>Last Name:</h3>
			<p class="item-para">{{ $project->client->client_lname }}</p>
		</div>

		 <div class="inline-item">
		 	<h3 class=titles-proj>Adress:</h3>
			<p class="item-para">{{ $project->client->address }}</p>
		</div>
		<div class="inline-item">
			<h3 class=titles-proj>Number:</h3>
			<p class="item-para">{{ $project->client->number }}</p>
		</div>
		<div class="inline-item">
			<h3 class=titles-proj>E-mail:</h3>
			<p class="item-para">{{ $project->client->email }}</p>
		</div>
		</div>
	</div>

	<div class="priceCon">
	
	<div class="price">
		<h2 class="price-titles">Discount (%) </h2>
				<h5 class="numbers-price">{{ $project->discount }}</h5>

	</div>
	<div class="price">
		<h2 class="price-titles">Total</h2>
		<div class="pricebox">
				<h5 class="numbers-price" id="moneysign">$</h5><h5 class="numbers-price">{{ $project->total}}</h5>
			</div>
	</div>


</div>
</div>



<div class="template-con">
		  <div class="card-template" id="quote">
                <img src="/images/quote.svg" class="icons">
                <h4 class="card-heading"> Quote </h4>
                <h4 class="card-subhead">Edit here your quote</h4>
                	<div class="double-btn">
                		<div class="edit-btn">
                    		<h4 class="double-txt"><a href="{{ url ('/quote') }}/{{$project->client->id }}">Edit</a></h4>
                    	</div>
						<div class="preview-btn">
                    		<h4 class="double-txt"><a href="{{ url ('/quote/tips') }}">Tips</a></h4>
                		</div>
                	</div>
      </div>
      	  <div class="card-template" id="contract">
                <img src="/images/contract.svg" class="icons">
                <h4 class="card-heading"> Contract </h4>
                <h4 class="card-subhead">Edit this project’s contract</h4>
                	<div class="double-btn">
                		<div class="edit-btn">
                    		<h4 class="double-txt"><a href="{{ url ('/contract/export') }}">Download</a></h4>
                    	</div>
						<div class="preview-btn">
                    		<h4 class="double-txt"><a href="{{ url ('/contract/tips') }}">Tips</a></h4>
                		</div>
                	</div>
      </div>

      	  <div class="card-template" id="invoice">
                <img src="/images/invoice.svg" class="icons">
                <h4 class="card-heading"> Invoice </h4>
                <h4 class="card-subhead">Edit this project’s invoice</h4>
                	<div class="double-btn">
                		<div class="edit-btn">
                    		<h4 class="double-txt"><a href="{{ url ('/invoice') }}/{{$project->client->id }}">Edit</a></h4>
                    	</div>
						<div class="preview-btn">
                    		<h4 class="double-txt"><a href="{{ url ('/invoice/tips') }}">Tips</a></h4>
                		</div>
                	</div>
      	</div>

      	 <div class="card-template" id="timetracker">
            <img src="/images/time_tracker.svg" class="icons">
              <h4 class="card-heading"> Time-Tracker </h4>
                <h4 class="card-subhead">Click to star the timer!</h4>	      
				<div id="timerContainer">
					<div class="timer">00:00:00:00</div>
						<div class="startTimer reset">
    						<i class="fas fa-play"></i>
  					    </div>
						<div class="pauseTimer reset">
    						<i class="fas fa-pause"></i>
  						</div>
				</div>

		</div>
</div>

@endsection 

