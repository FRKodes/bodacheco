<?php namespace App\Http\Controllers;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	public function sendmail(){
		
		return 'ok';
		
		Mail::send('emails.contacto', array('key' => 'value'), function($message)
		{
		    $message->to('frkalderon@gmail.com', 'Tony Montana')->subject('Email Boda Checo.');
		});
	}

	

}
