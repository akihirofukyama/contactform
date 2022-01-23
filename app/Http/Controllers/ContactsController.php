<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'fullname'     => 'required|max:10',
            'email'    => 'required|email',
            'postcode'      => 'required',
            'gender'   => 'required',
            'address'   => 'required',
            'opinion' => 'required|max:120',
        ]);
        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if ($action === 'submit') {

            Contact::create([
                'fullname' => $request->fullname,
                'gender' => $request->gender,
                'email' => $request->email,
                'postcode' => $request->postcode,
                'address' => $request->address,
                'building_name' => $request->building_name,
                'opinion' => $request->opinion,
            ]);


            return redirect()->route('complete');
        } else {
            return redirect()->route('contact')->withInput($input);
        }
    }
    public function complete()
    {
        return view('contacts.complete');
    }

    public function management()
    {
        $contacts = Contact::all();

        return view('contacts.management', ['contacts' => DB::table('contacts')->paginate(15)], ['contacts' => $contacts]);
    }

    public function search(Request $request)
    {

        $query = Contact::query();

        $search1 = $request->input('fullname');
        $search2 = $request->input('created_at');
        $search3 = $request->input('email');

        if ($request->has('fullname') && $search1 != ('指定なし')) {
            $query->where('fullname', $search1)->get();
        }

        if ($request->has('crated_at') && $search2 != ('指定なし')) {
            $query->where('created_at', $search2)->get();
        }

        if ($request->has('email') && $search3 != '') {
            $query->where('email', 'like', '%' . $search3 . '%')->get();
        } else {
            return view('contacts.management');
        }


        return view('contacts.management', [
            'contacts' => $contacts
        ]);
    }

    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/management');
    }
}
