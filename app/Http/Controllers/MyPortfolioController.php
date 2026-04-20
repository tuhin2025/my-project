<?php

namespace App\Http\Controllers;

use App\Models\Contact\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MyPortfolioController extends Controller
{
    public function index()
    {
//        return view('index');
        return view('contact_page');
    }

    public function ajaxList()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
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
            'remarks' => $request->remarks,
            'insert_dt' => now(),
        ]);

        //  dd($request->all());
        return redirect()->route('my-portfolio.contact.list')->with('success', 'Message sent successfully!');
    }


    public function skill()
    {
        return view('skill');
    }

    public function contactList()
    {
        $contacts = Contact::get();
//         dd($contacts);
        return view('contact_list', compact('contacts'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        try {

            $contact = Contact::findOrFail($id);

            $contact->update([
                'user_name' => $request->user_name,
                'email'     => $request->email,
                'subject'   => $request->subject,
                'message'   => $request->message,
                'remarks'   => $request->remarks,
                'update_dt' => now(),
            ]);

            return redirect()->route('my-portfolio.contact.list')
                ->with('success', 'Updated successfully!');

        } catch (\Exception $e) {

            // Log error for debugging
            Log::error('Contact update failed: '.$e->getMessage());

            return back()->with('error', 'Something went wrong! Please try again.');
        }
    }
}
