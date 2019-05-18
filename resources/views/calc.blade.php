@extends('layouts.app')
@section('section')

<script src="http://unpkg.com/vue@2.3.4"></script>
<div class="section" id="calcCon">


<div id="vueapp">

	<div class="calcTop">
  		<div class="calcform">
  			<h2 class="calc-title">Calculate your freelance rate</h2>
			<form @submit.prevent="formSubmit">
				<h2 class="question ">How much income do you want to make per year?</h2> 
				<input type="text" v-model="income" class="form-control" placeholder="$00,000">
				<h2 class="question">How many hours  are billable per week?</h2> 
				<input type="text" v-model="hours" class="form-control" placeholder="number">
				<h2 class="question">How many weeks per year would you take off for vacation?</h2> 
				<input type="text" v-model="weeks" class="form-control" placeholder="number">
				<br>
				<a href=""><input type="submit" class="btn-primary" id="calcsubmit"value="Submit"></a>
				<p class="scrolltxt">See your results below</p>
			</form>
  		</div>
	</div>


	<div class="calcBottom">
	  	<h2 class="calc-title" id="rate-title">Your rate</h2>

		<div class="rategrid">

			<div class="ratebox" id="hourbox">
				<h2 class="rate-title">Hour</h2>
					<h2 class="rate">@{{hrly}}</h2>
			</div>

			<div class="ratebox" id="daybox">
				<h2 class="rate-title">Day</h2>
					<h2 class="rate">@{{dailyRate}}</h2>
			</div>

			<div class="ratebox" id="weekbox">
				<h2 class="rate-title">Week</h2>
					<h2 class="rate">@{{weeklyRate}}</h2>
			</div>

		</div>
	</div>
	
</div>

		

		<div class="calc-tipbox">
	    		<h2 class="calc-title" id="tips-title">Tips for charging clients</h2>

	    				<div class="calc-grid">
							<div class="calcboxone">
	    						<h2 class="boldtxt">It is important to include other factors in your prices.</h2>
	    						<p>For example, taxes, insurance and savings. The rates you view here have be multiplied by 2 to take these into account. </p>
	    				</div>

						<div class="calcboxotwo">
	    						<h2 class="boldtxt">Know your worth</h2>
	    						<p>Its best to bill per week, or per day even if the project is smaller. You can also bill per project.</p> 
	    				</div>

	    				<div class="calcboxthree">
	    						<h2 class="boldtxt">Know your worth</h2>
	    						<p>Remember they are hiring you because they have a problem that needs to be fixed that you can help them with your skill set.</p>
	    				</div>

	    		<div class="calcboxfour">
	    			<h2 class="boldtxt">Try keep these rates to yourself as reference</h2>
	    			<p>and never negotiate them with the client. Instead see how you can limit the project scope while still solving the problem.</p>
	    		</div>
		</div>
	</div>
</div>
</div>
	<script src="js/calc.js"></script>

@endsection 
