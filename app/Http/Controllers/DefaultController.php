<?php 

namespace App\Http\Controllers;

use App\Models\Events;

class DefaultController extends Controller
{
    public function home()
    {
        $events = Events::with('user')->take(5)->get();
        
        return view("homepage", [
            'events' => $events
            ]);
    }

}