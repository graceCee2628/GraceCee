<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ticket;
use App\User;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        $tickets = Ticket::orderBy('created_at', 'desc')->get(); 
        return view('admin.index')->with('tickets', $tickets);
    }

    public function my_ticket()
    {

        $user_id=Auth::user()->id;
        $user=User::find($user_id);
        return view ('my_ticket')->with('tickets', $user->tickets);
    }

    public function show($id)
    {
        $tickets = Ticket::find($id); 
        return view ('admin.show')->with('tickets', $tickets);

    }    



}
