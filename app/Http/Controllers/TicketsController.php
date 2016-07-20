<?php

namespace Tickets\Http\Controllers;

use Illuminate\Http\Request;

use Tickets\Http\Requests;

class TicketsController extends Controller
{
    public function latest()
    {
    	return view('tickets/list');
    }
    public function popular()
    {
    	return view('tickets/list');
    }
    public function open()
    {
    	return view('tickets/list');
    }
    public function closed()
    {	
    	return view('tickets/list');
    }
    public function details($id)
    {
    	return view('tickets/details');
    	
    }

}
