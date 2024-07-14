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
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'category', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = (['fullname' => $request->first_name . $request->last_name] + ['tell' => $request->tel_1 . $request->tel_2 . $request->tel_3] + $request->only(['gender', 'email', 'address', 'building', 'category', 'detail']));

        Contact::create($contact);

        return view('thanks');
    }
}
