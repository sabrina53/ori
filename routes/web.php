<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/login', 'Auth\LoginController')->name('login');

// Client Controllers 
Route::get('/clients', 'ClientController@getAllClients');
Route::get('/clients/show/{id}', 'ClientController@getOneClient');

Route::get('/clients/new', 'ClientController@addClientForm');
Route::post('/clients/add', 'ClientController@addClient');

Route::get( '/clients/show/{id}/edit', 'ClientController@edit');
Route::put('/clients/show/{id}','ClientController@update');

// Project Controllers 
Route::get('/projects/show/{id}', 'ProjectController@getOneProject');
Route::get( '/projects/show/{id}/edit', 'ProjectController@edit');
Route::put('/projects/show/{id}','ProjectController@update');
Route::get('/projects/new', 'ProjectController@showProjectForm');
Route::post('/projects/add/', 'ProjectController@addProject');

 // Calc Route 
Route::get('/calc', function() {
	return view('calc');
});

 // Tips Routes 
Route::get('/invoice/tips', function() {
	return view('invoiceTips');
});

Route::get('/quote/tips', function() {
	return view('quoteTips');
});

Route::get('/contract/tips', function() {
	return view('contractTips');
});


// pdf stuff////////////////////////
Route::get('/invoice/{id}', 'ProjectController@getInvoice');
Route::put('/invoice/show/{id}','ProjectController@updateInvoice');

Route::get('/invoice/show/{id}', 'ProjectController@exportInvoice');

Route::get('/export/{id}', function(){
	 $user = App\User::select()->first();	 
	 $client = App\Client::select()->first();
	 $project = App\Project::select()->first();

	 $pdf = PDF::loadView('invoiceDetails',['user' => $user, 'client' => $client, 'project' => $project]);
     return $pdf->stream('invoice.pdf');
});

Route::get('/quote/{id}', 'ProjectController@getQuote');
Route::put('/quote/show/{id}','ProjectController@updateQuote');

Route::get('/exportquote', function(){
	  $pdf = PDF::loadView('quoteDetails');
           return $pdf->stream('quote.pdf');
});



Route::get('/contract/export', function(){
	$file = public_path(). '/contract-template.pdf';
	$headers = array (
		'Content-Type: application/pdf',
	);
           return Response::download($file, "contract-template.pdf", $headers);
});
