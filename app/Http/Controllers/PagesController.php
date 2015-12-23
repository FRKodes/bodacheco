<?php namespace App\Http\Controllers;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function sendmail(){

		// return 'ok -> '.getenv('MANDRILL_KEY').' - '.getenv('MAIL_DRIVER').' - '.getenv('APP_ENV');
		
		Mail::send('emails.contacto', [], function($message)
		{
		    $message->to('frkalderon@gmail.com', 'Checo Barrera')->subject('Email Boda Checo.');
		});
	}

	

}
