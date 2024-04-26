<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use League\CommonMark\Extension\SmartPunct\EllipsesParser;
use PDO;

class ContactController extends Controller
{


    public function all_contact()
    {

        $contacts = Contact::orderBy('created_at', 'desc')->get();

        return view('contact/all_contact', compact('contacts'));
    }

    public function single_contact(Request $request, $id)
    {

        $contact = Contact::where('id', $id)->first();
        return view('contact/single_contact', compact('contact'));
    }

    public function single_contact_store(Request $request, $id)
    {

        // dd($id) ; 

        return view('');
    }

    public function add_contact()
    {
        $user = Auth::guard('admin')->user();

        return view('contact/add_contact', compact('user'));
    }

    public function contact_store(Request $request)
    {
        $user_id = $request->user_id;
        $address = $request->address;
        $number = $request->number;
        $city = $request->city;

        $contact = new Contact();
        $contact->user_id = $user_id;
        $contact->addess = $address;
        $contact->number = $number;
        $contact->city = $city;

        $done = $contact->save();

        if ($done) {
            return response()->json([
                'status' => '200',
                'msg' => 'Success',
                'url' => route('all_contact_view')
            ]);
        } else {
            return response()->json([
                'status' => '200',
                'msg' => 'Something Went Wrong'
            ]);
        }
    }


    public function single_contact_edit(Request $request, $id)
    {
        $contact = Contact::where('id', $id)->first();
        return view('contact/single_contact_edit', compact('contact'));
    }

    public function single_contact_edit_store(Request $request)
    {


        $contact = Contact::where('id', $request->contact_id)->first();

        // $user_id = 19;
        $address = $request->address;
        $number = $request->number;
        $city = $request->city;


        $contact->addess = $address;
        $contact->number = $number;
        $contact->city = $city;

        $done = $contact->save();

        if ($done) {
            return response()->json([
                'status' => '200',
                'msg' => 'Success',
                'url' => route('all_contact_view')
            ]);
        } else {
            return response()->json([
                'status' => '200',
                'msg' => 'Something Went Wrong'
            ]);
        }
    }


    public function single_contact_delete(Request $request, $id)
    {
        $contact = Contact::where('id', $request->id);
        $done = $contact->delete();
        if ($done) {
            return redirect()->route('all_contact_view');
        } else {
            return redirect()->back();
        }
    }
}
