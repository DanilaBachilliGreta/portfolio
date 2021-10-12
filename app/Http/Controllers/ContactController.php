<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function contact()
    // {
    //     return view('contact/contact');
    // }

    public function confirm(ContactRequest $request)
    {
        Mail::to('admin@roger.com')
         ->send(new Contact($request->except('')));  //->except('_token')
        return view('contact/confirm');
    }
    public function create()
    {
        //
        return view('contact/contact');
    }
    public function store(ContactRequest $request)
    {
        //
        $this->validate($request, [
            'email' => 'bail|required|email',
            'message' => 'bail|required|max:500'
        ]);
        $contact = new \App\Models\Contact;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return view('contact/confirm');
    }
}
