<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the contacts.
     */
    public function index()
    {
        return view('contacts.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'description' => 'required|min:0',
        ]);

    }
}
