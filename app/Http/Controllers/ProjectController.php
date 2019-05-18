<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Client;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Alert;
use PDF;
use DB;


 
class ProjectController extends Controller
{
public function getAllProjects() {  //  need to only get all CURRENT projects 
    		$projects = Project::select()->get();
            return $projects;
    	// return view('projects',['title' => 'Current projects', 'projects' => $projects]);
}   

public function getOneProject($id) {
    	$project = Project::select()->where('id',$id)->with('client')->first();
        // return $project;
        return view('project',['title' => 'Project', 'project' => $project]);
}

 public function edit($id) {
            $project = Project::find($id);
            return view( 'edit_project', [ 'title' => 'Project', 'project' => $project]);
        }

 public function update(Request $request, $id) {
            $project = Project::find($id);
            $project->start_date = $request->input('start_date');
            $project->estimated_due_date = $request->input('estimated_due_date');
            $project->completion_status = $request->input('completion_status');
            $project->payment_status = $request->input('payment_status');
            $project->total = $request->input('total');
            $project->update();

        // return view('project',['title' => 'Project', 'project' => $project]);

         Alert::success('Success', 'Project Updated!!')->autoclose(2000);
        return redirect('/clients')->with('success', 'Profile updated!');
        }

public function showProjectForm() {
        $clients = Client::select()->get();
        return view('project_form', ['title'=> 'Add a new project', 'clients'=> $clients]);
}

public function addProject() {
    $data = request()->input();

    $validator = validator()->make($data,[
    	'project_name' => 'required',
    	'estimated_due_date' => 'required',
    	'start_date' => 'required',
        'project_descrip' => 'required',
        'total' => 'required',

    ]);
    	//only run the code below if validation is passed
    if($validator->passes()) {  

    $client = new Client([
    'user_id' => Auth::id(),
    'company_name' => request()->input('company_name'),
    'client_fname' => request()->input('client_fname'),
    'client_lname' => request()->input('client_lname'),
    'business_type' => request()->input('business_type'),
    'address' => request()->input('address'),
    'number' => request()->input('number'),
    'email' => request()->input('email'),
    ]);
    $client->save();
        
    $cid = $client->id;
    $cid = request()->input('client_id');
    
    	$project = new Project([
//             // left db field and right form field 
    		'client_id' => $cid,
             // 'user_id' => Auth::id(), 
            'project_name' => request()->input('project_name'),
            'project_descrip' => request()->input('project_descrip'),
            'estimated_due_date' => request()->input('estimated_due_date'),
            'start_date' => request()->input('start_date'),
            'total' => request()->input('total'),
    	]);
    	$project->save();
    	   // return 'project added!';
             Alert::success('Success Message', 'New Project added!');
            return redirect('/')->with('success', 'Profile updated!');
        } 
                return redirect()->back()->withErrors($validator->errors())->withInput();
    }



    public function getInvoice($id) {
        $client = Client::select()->where('id', $id)->first();
        $user = Auth::user();
        $project = Project::find($id);

        return view('invoice', ['title'=> 'New invoice', 'client'=> $client, 'project'=>$project,'user'=>$user]);
    }

    public function getQuote($id) {
        $client = Client::select()->where('id', $id)->first();
        $user = Auth::user();
        return view('quote', ['title'=> 'New quote', 'client'=> $client, 'user'=>$user]);
    }

 public function updateInvoice(Request $request, $id) {
            $user = Auth::user();
        $client = Client::select()->where('id', $id)->first();
            $project = Project::find($id);
            $project->discount = $request->input('discount');
            $project->total = $request->input('total');
            $project->total_date = $request->input('total_date');
            $project->pay_perc_one = $request->input('pay_perc_one');
            $project->pay_perc_two = $request->input('pay_perc_two');
            $project->tax = $request->input('tax');
            $project->item_name = $request->input('item_name');
            $project->item_name_two = $request->input('item_name_two');
            $project->item_name_three = $request->input('item_name_three');
            $project->item_amount = $request->input('item_amount');
            $project->item_amount_two = $request->input('item_amount_two');
            $project->item_amount_three = $request->input('item_amount_three');
            $project->payment_one_date = $request->input('payment_one_date');
            $project->payment_two_date = $request->input('payment_two_date');
            $project->issued = $request->input('issued');

            $project->update();
         Alert::success('Success', 'Invoice Updated!!')->autoclose(2000);
        // return redirect('/invoice/{id}')->with('success', 'Profile updated!');

        return view('invoiceDetails',['title'=> 'New invoice', 'client'=> $client, 'project'=>$project,'user'=>$user]);

    }
   
}
