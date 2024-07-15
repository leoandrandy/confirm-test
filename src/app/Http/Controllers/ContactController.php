<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $tell = $request->tel_1 . '' . $request->tel_2 . '' . $request->tel_3;
        
        $contact = ['tell' => $tell ] + $request->only(['first_name', 'last_name', 'gender', 'email', 'address', 'building', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = (['fullname' => $request->first_name . $request->last_name] + $request->only(['gender', 'email', 'tell', 'address', 'building', 'detail']));

        Contact::create($contact);

        return view('thanks');
    }
}
