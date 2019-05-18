@extends('layouts.app')
@section('section')

<div class="section">
    <div class="formCon">
       <div id="clientForm"> 
          <h3 class=title>Update Project</h3>
	           <form method="post" action="{{ url('projects/show/') }}/{{ $project->id }}" enctype="multipart/form-data">
		         {{ method_field('PUT') }}
		         {{ csrf_field() }}
                <div class="clientgrid">
                    <div id="clientbox1"> 
                        Starting Date: <input type="text" name="start_date" placeholder=" Day/Month/Year" id="start" class="form-control" value="{{ $project->start_date }}"><br>
                        Estimated End Date: <input type="text" name="estimated_due_date" placeholder=" Day/Month/Year"id="estimated_end" class="form-control" value="{{ $project->estimated_due_date }}">
                        <br>
                        Project Status: 
                        <input type="text" name="completion_status" id="completion_status" class="form-control" value="{{ $project->completion_status }}"><br>
                    </div>

                    <div class="clientbox2">
       <!--    <input type="radio" name="completion_status" id="completion_status" class="form-control" value="{{ $project->completion_status }}">Completed<br> -->
            
                        Payment Status: <input type="text" name="payment_status" id="payment_status" class="form-control" value="{{ $project->payment_status }}"><br>
                        Discount: <input type="text" name="discount" id="discount" placeholder="$" class="form-control" value="{{ $project->discount }}"><br><br>
                        Total Fee: <input type="text" name="total" id="price" placeholder="$" class="form-control" value="{{ $project->total }}"><br><br>
                        <input type="submit" class="btn-primary"value="Save">

                </div>
	           </form> 
       </div>
    </div>
</div>

@endsection