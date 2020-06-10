<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Mail;

class ContactsController extends Controller
{

  // view contact information from database method
  public function index(){

      $contacts = Contact::all();

      return view('frontend.contacts.index',compact('contacts'));
  }

  public function create(){

      return view('frontend.contacts.create');
  }

// when submit is clicked : store contacts data in fields
  public function storeDevice(Request $request){

      $contact = new Contact();

      // $contact->name        = request('name');
      // $contact->phone       = request('phone');
      // $contact->email       = request('email');
      // $contact->message     = request('message');

      $contact->name = $request->name;
      $contact->phone = $request->phone;
      $contact->email = $request->email;
      $contact->message = $request->message;

// save data to database
      $contact->save();

      // sending mail code here
      \Mail::send('frontend.contacts.contact_email',
             array(
                 'name' => $request->get('name'),
                 'phone' => $request->get('phone'),
                 'email' => $request->get('email'),
                 // critical messager fields ( check mail view & form properly )- take note
                 //they should be different fields here
                 'user_message' => $request->get('message'),

             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('wandieinnocent2@gmail.com')->subject('Crime Records Tracker Feedback');
               });


      return redirect('/contacts');

  }

}
