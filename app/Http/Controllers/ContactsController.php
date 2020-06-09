<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

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
  public function storeDevice(){

      $contact = new Contact();

      $contact->name        = request('name');
      $contact->phone       = request('phone');
      $contact->email       = request('email');
      $contact->message     = request('message');

// save data to database
      $contact->save();

      return redirect('/contacts');

  }

}
