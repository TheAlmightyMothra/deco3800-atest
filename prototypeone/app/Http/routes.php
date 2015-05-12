<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Index Route - Home Page
Route::get("/", 
		   ['as' => 'index_path', 			
			'uses' => "PrototypeOneController@index"]);

<<<<<<< HEAD
Route::get("/", [ 'as' => 'index_path', 			
				  'uses' => "PrototypeOneController@index"]);
Route::post("login", [ 'as' => 'login_path', 			
                       'uses' => "PrototypeOneController@login"]);
Route::get("home/{user_id}", [ 'as' => 'home_user_path', 
							   'uses' => "PrototypeOneController@homeUser"]);
Route::get("home/{user_id}/create_note", [ 'as' => 'create_note_path',
										   'uses' => "PrototypeOneController@createNote"]);
Route::post("home/{user_id}/create_note/check", [ 'as' => 'create_note_check_path', 
												  'uses' => "PrototypeOneController@createNoteCheck"]);
Route::get("/home/{user_id}/cases", ['as' => 'view_cases', 'uses' => "PrototypeOneController@getCases"]);
// For messages
Route::post("home/{user_id}/cases/{case_id}/submitMessage", ['as' => 'send_message', 
													   	   'uses' => "PrototypeOneController@submitMessage"]);

Route::get("/home/{user_id}/cases/{case_id}", ['as' => 'get_case_page', 'uses' => "PrototypeOneController@getCasePage"]);
Route::get("home/{user_id}/{research_note_id}", [ 'as' => 'view_note_path', 		
												  'uses' => "PrototypeOneController@viewNote"]);
Route::get("home/{user_id}/{research_note_id}/edit", [ 'as' => 'edit_path',				
													   'uses' => "PrototypeOneController@editNote"]);
Route::patch("home/{user_id}/{research_note_id}/edit/check", [ 'as' => 'edit_check_path', 		
															   'uses' => "PrototypeOneController@editNoteCheck"]);
Route::get("home/{user_id}/{research_note_id}/delete", [ 'as' => 'delete_path',			
														 'uses' => "PrototypeOneController@deleteNoteCheck"]);
Route::get("home/{user_id}/{research_note_id}/delete/confirm", [ 'as' => 'delete_path_confirm', 
																 'uses' => "PrototypeOneController@deleteNoteConfirm"]);
Route::get("home", [ 'as' => 'home_no_user_path', 		
					 'uses' => "PrototypeOneController@homeNoUser"]);
Route::get("logout", [ 'as' => 'logout_path', 			
					   'uses' => "PrototypeOneController@logout"]);
Route::get("about", [ 'as' => 'about_path', 			
					  'uses' => "PrototypeOneController@about"]);
Route::get("register", [ 'as' => 'register_path', 			
						 'uses' => "PrototypeOneController@registerHome"]);
Route::get("register/seeker", [ 'as' => 'seeker_register', 
								'uses' => 'PrototypeOneController@seekerRegister']);
Route::get("register/professional", [ 'as' => 'professional_register', 
								'uses' => 'PrototypeOneController@professionalRegister']);
Route::get("register/supplier", [ 'as' => 'supplier_register', 
								'uses' => 'PrototypeOneController@supplierRegister']);			
Route::post("newAccount", [ 'as' => 'newaccount_path', 		
						    'uses' => "PrototypeOneController@newAccount"]);
//for cases 
Route::post("/home/{user_id}/{research_note_id}/submitCase", [ 'as' => 'submit_case', 
								'uses' => "PrototypeOneController@submitCase"]);							


//for messages
Route::post("cases/sendMessage", ['as' => 'submit_message', 'uses' => "PrototypeOneController@submitMessage"]);
=======
// Login Route - Handling Login
Route::post("login", 
			['as' => 'login_path', 			
             'uses' => "PrototypeOneController@login"]);
>>>>>>> 9cc930b88c53f1b46f54c3f2c84686b2c5770400

// Home Route - Home page of a user
Route::get("home/{user_id}", 
		   ['as' => 'home_user_path', 
			'uses' => "PrototypeOneController@homeUser"]);

// Create Note Route - Create a research note
Route::get("home/{user_id}/create_note", 
		   ['as' => 'create_note_path',
			'uses' => "PrototypeOneController@createNote"]);

// New Note Validation Route - Validate inputs given for a route
Route::post("home/{user_id}/create_note/check", 
			['as' => 'create_note_check_path', 
			 'uses' => "PrototypeOneController@createNoteCheck"]);

// View Case Route - Display research notes sent for review
Route::get("home/{user_id}/cases", 
		   ['as' => 'view_cases', 
		    'uses' => "PrototypeOneController@getCases"]);

// Submit Message Route - Submit a message for a particular case
Route::post("home/{user_id}/cases/{case_id}/submitMessage", 
		   ['as' => 'send_message', 
			'uses' => "PrototypeOneController@submitMessage"]);

// Get Case Route - Gets the page of a particular case
Route::get("home/{user_id}/cases/{case_id}", 
		   ['as' => 'get_case_page', 
		    'uses' => "PrototypeOneController@getCasePage"]);

// View Note Route - View a particular research note
Route::get("home/{user_id}/{research_note_id}", 
		   ['as' => 'view_note_path', 		
			'uses' => "PrototypeOneController@viewNote"]);

// Edit Note Route - Edit a particular research note
Route::get("home/{user_id}/{research_note_id}/edit", 
		   ['as' => 'edit_path',				
			'uses' => "PrototypeOneController@editNote"]);

// Edit Note Validation Route - Validate edit on a research note
Route::patch("home/{user_id}/{research_note_id}/edit/check", 
			 ['as' => 'edit_check_path', 		
			  'uses' => "PrototypeOneController@editNoteCheck"]);

// Delete Note Route - Delete a research note
Route::get("home/{user_id}/{research_note_id}/delete", 
		   ['as' => 'delete_path',			
			'uses' => "PrototypeOneController@deleteNoteCheck"]);

// Delete Note Validation Route - Confirm that note is to be deleted
Route::get("home/{user_id}/{research_note_id}/delete/confirm", 
		   ['as' => 'delete_path_confirm', 
			'uses' => "PrototypeOneController@deleteNoteConfirm"]);

// Submit Case Route - Submit a note for panel review
Route::post("home/{user_id}/{research_note_id}/submitCase", 
		    ['as' => 'submit_case', 
			 'uses' => "PrototypeOneController@submitCase"]);

// No user route - A page where a user is redirected to if they are 
// not logged in
Route::get("home", 
		   ['as' => 'home_no_user_path', 		
			'uses' => "PrototypeOneController@homeNoUser"]);

// Logout route - Logout user
Route::get("logout", 
		   ['as' => 'logout_path', 			
			'uses' => "PrototypeOneController@logout"]);

// About route - About page of this web app
Route::get("about", 
		   ['as' => 'about_path', 			
			'uses' => "PrototypeOneController@about"]);

// Register route - List of possible accounts to register
Route::get("register", 
		   ['as' => 'register_path', 			
			'uses' => "PrototypeOneController@registerHome"]);

// Register Seeker route - Form for registering a seeker
Route::get("register/seeker", 
		   ['as' => 'seeker_register', 
			'uses' => 'PrototypeOneController@seekerRegister']);

// Register Professional route - Form for registering a professional
Route::get("register/professional", 
		   ['as' => 'professional_register', 
			'uses' => 'PrototypeOneController@professionalRegister']);

// Register Supplier route - Form for registering a supplier
Route::get("register/supplier", 
		   ['as' => 'supplier_register', 
			'uses' => 'PrototypeOneController@supplierRegister']);

// Register Expert User route - Form for registering an expert user
Route::get("register/expert_user", 
		   ['as' => 'expert_user_register', 
			'uses' => 'PrototypeOneController@expertUserRegister']);

// New Account Route - Validate forms used to create an account
Route::post("newAccount", 
		    ['as' => 'newaccount_path', 		
			 'uses' => "PrototypeOneController@newAccount"]);

// Easter eggs for people
Route::get("pizza", "PrototypeOneController@pizza");
