<?php

namespace App\Http\Controllers;

use App\Models\Contact\Contact;
use Illuminate\Http\Request;

class MyPortfolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public
    function contactStore(Request $request)
    {
        Contact::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
//        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }


    public function skill()
    {
        return view('skill');
    }

    public function contactList()
    {
        $contacts = Contact::get();
//        dd($contacts);
        return view('contact_list', compact('contacts'));
    }
}
