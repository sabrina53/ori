@extends('layouts.app')
@section('section')
<div class="homecon">
    <div id="home">
        <h2 class="dash-title">MANAGE YOUR PROJECTS</h2>

        <div class="cardgrid">

            
            <div class="dashcards" id="addclients">
                    <img src="images/addclient.svg" class="icons" id="addclienticon">
                    <h3 class="card-txt"> Add a </h3>
                    <h4> New Client </h4>
                    <button class="card-button"><a href="{{ url ('/clients/new')}}"> View all</a></button>
            </div>

            <div class="dashcards" id="clients">
                <img src="images/client.svg" class="icons">
                <h3 class="card-txt"> Look through your </h3>
                <h4> Client List </h4>
                <button class="card-button"><a href="{{ url ('/clients')}}"> View all</a></button>
            </div>

            <div class="dashcards" id="new-proj" >
                <img src="images/proj_new.svg" class="icons">
                <h3 class="card-txt"> Create a </h3>
                <h4> New Project </h4>
                <button class="card-button"><a href="{{ url ('/projects/new')}}">Click here</a></button>

            </div>

             <div class="dashcards" id="calculator">
                <img src="images/calc.svg" class="icons" id="calcicon">
                 <h4> Calculate </h4>
                 <h3 class="card-txt"> Your working rate</h3>
                 <button class="card-button" id="calcbutton"><a href="{{ url ('/calc')}}">Click here</a> </button>
            </div>

        </div>
    </div> 
</div>
@endsection