<?php

namespace App\Http\Controllers\Site\Pages;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Connection;
use App\Models\Contact;
use Auth;
class AddressBookController extends Controller
{
    public function index(){
        $user = Auth::user();
        $connections = Connection::get();
        return view('site.pages.addressBook',compact('user','connections'));
    }
}
