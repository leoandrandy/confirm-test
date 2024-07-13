<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'category', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = (['fullname' => $request->first_name . $request->last_name] + ['tell' => $request->tel_1 . $request->tel_2 . $request->tel_3] + $request->only(['gender', 'email', 'address', 'building', 'category', 'detail']));

        Contact::create($contact);

        return view('thanks');
    }
}
