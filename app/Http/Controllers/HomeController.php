<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the contacts.
     */
    public function index()
    {
        return view('home.index');
    }


}
