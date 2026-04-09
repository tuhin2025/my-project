<?php

namespace App\Http\Controllers;

use App\Models\Contact\Contact;

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

    public function skill()
    {
        return view('skill');
    }

    public function contactList()
    {
        $contacts = Contact::all();
        //dd($contacts);
         return view('contact_list', compact('contacts'));
    }
}
