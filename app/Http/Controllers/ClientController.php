<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Auth;
use PDF;
use Alert;



class ClientController extends Controller
{
    public function addClientForm() {
        return view('addclient');
    }
    public function addClient() {
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
        // Sweet alert message
        Alert::success('Success', 'New Client added!')->autoclose(2000);
        return redirect('/clients')->with('success', 'Profile updated!');
}

    
        public function getAllClients() {
    	$clients = Client::select()->where('user_id', Auth::id())->get();
        // return $clients;
    	return view('client_list',['title' => 'clients', 'clients' => $clients]);
    }   

        public function getOneClient($id) {
    	$client = Client::select()->where('id', $id)->with('projects')->first();
        // return $client;
    	return view('client',['title' => 'Client', 'client' => $client]);
    }

        public function edit($id) {
            $client = Client::find($id);
            return view( 'edit_client', [ 'title' => 'Client', 'client' => $client]);
        }

        public function update(Request $request, $id) {
            $client = Client::find($id);
            $client->client_fname = $request->input('client_fname');
            $client->client_lname = $request->input('client_lname');
            $client->business_type = $request->input('business_type');
            $client->address = $request->input('address');
            $client->number = $request->input('number');
            $client->email = $request->input('email');
            $client->update();

        // return view('edit_client',['title' => 'Client', 'client' => $client]);
         Alert::success('Success', 'Client Updated!!')->autoclose(2000);
        return redirect('/clients')->with('success', 'Profile updated!');

        }

}
