<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{

    public function save(Request $request){
        $contact = new Contact();
        $contact->nom = $request->get('name');
        $contact->email = $request->get('email');
        $contact->phone = $request->get('phone');
        $contact->message = $request->get('messages');
        $contact->save();

        return response()->json(['success' => true]);
    }
}
