<?php

namespace Tickets\Http\Controllers;

use Illuminate\Http\Request;

use Tickets\Http\Requests;

class TicketsController extends Controller
{
    public function latest()
    {
    	dd('latest');
    }
    public function popular()
    {
    	dd('populares chico jajaj');	
    }
    public function open()
    {
    	dd('open');	
    }
    public function closed()
    {	
    	dd('closed');
    	
    }
    public function details($id)
    {
    	dd('details: '.$id);
    	
    }

}
