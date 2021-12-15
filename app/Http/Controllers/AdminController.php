<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); 
    }
    
    public function index()
    {
        $events = Events::with('user', 'category')->paginate(10);
        
        return view('admin.index', [
            'events' => $events    
        ]);
    }
}
