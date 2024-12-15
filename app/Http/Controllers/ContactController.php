<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Client.contactus');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'subject' => 'required|min:2|max:255',
                'message' => 'required|min:2',
            ]
        );
        
        $message = Contact::create(
            [
                'subject' => $request->subject,
                'message' => $request->message,
                'client_id' => session('user_id'),
            ]
        );

        return redirect('/home')->with('message', __('myCustom.contact-message'));
    }

}
