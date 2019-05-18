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
    <div class="projectForm">

	    <form method="post" action="{{ url('projects/add') }}" enctype="multipart/form-data">
        
            <div class="projgrid">
                {{ csrf_field() }}

               <div class="projbox1">
                     <h3 class=title>Create a new Project</h3>
                     <br>
                     <p>Choose a client from the dropdown! </p>
                       <br>
                     Brand Name: <select name="client_id" id="client_id" placeholder='Select a Client'>
  
                     @foreach($clients as $client)
                      <option value="{{ $client->id}}">{{ $client->company_name }}</option>
                     @endforeach
                                </select> 
                 <br>
                 <br>
	             Project Name: <input type="text" name="project_name" id="project_name"  class="form-control" value="{{ old('project_name') }}">
                 <br>
                 Project Description: <textarea type="text" name="project_descrip" id="description" class="form-control" value="{{ old('project_descrip') }}"> </textarea>
                  </div>

              <div class="projbox2">
                <br>
                <br>
                <br>
                <br>
	             Starting Date: <input type="text" name="start_date" placeholder=" Day/Month/Year" id="start" class="form-control" value="{{ old('start_date') }}">
                 Estimated End Date: <input type="text" name="estimated_due_date" placeholder=" Day/Month/Year"id="estimated_end" class="form-control" value="{{ old('estimated_due_date') }}">    
	             Total Fee: <input type="text" name="total" id="price" placeholder="$" class="form-control" value="{{ old('total') }}"><br>
	            <button href="redirect" type="submit" class="btn-primary" id="formbtntwo" value="Add">Add</button>
               </div>
        </form>  

     </div>
  </div>
</div>
 

@endsection