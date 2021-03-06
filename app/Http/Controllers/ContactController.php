<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(Request $request)
    {
    	return view('pages.contact');
    }

    public function create(Request $request)
    {
    	Contact::create($request->all());
    	return back()->with('success', 'sucesso');
    }
}
