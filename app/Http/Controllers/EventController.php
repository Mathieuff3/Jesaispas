<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Categories;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    
    public function index()
    {
        $events = Events::with('user', 'category')->paginate(5);
        
        return view('events.index', [
            'events' => $events    
        ]);
    }
    
    public function show(int $id)
    {
        $event = Events::findOrFail($id);
        // $comments = $event->comments()->oldest()->get();
        
        return view('events.show', [
            'event' => $event,
            // 'comments' => $comments
        ]);
    }
    
    public function create()
    {
        $categories = Categories::all();
        
        return view('events.create', [
            'categories' => $categories    
        ]);
    }
    
    public function store(Request $request)
    {
        // Validation du formulaire
        $request->validate([
            'name' => 'required|min:3|unique:posts',
            'content' => 'required|min:5'
        ]);
        
        // Enregistrement de l'evenement (si la requête a été validée)
        $event = new Events();
        $event->name = $request->input('name');
        $event->content = $request->input('content', 500);
        $event->adress = $request->unique();
        $event->category_id = $request->input('category');
        $event->user_id = auth()->user()->id;
        
        // Ajoute l'article en base de données
        $event->save();
        
        return redirect()->route('home');
    }
    
    public function edit(int $id)
    {
        $event = Events::findOrFail($id);
        $categories = Categories::all();
        
        return view('events.edit', [
            'event' => $event,
            'categories' => $categories
        ]);
    }
    
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'min:3|unique:posts',
            'content' => 'min:5'
        ]);
        
        $event = Events::findOrFail($id);
        $event->title = $request->input('title');
        $event->content = $request->input('content');
        $event->category_id = $request->input('category');
        
        $event->save();
        
        return redirect()->route('admin.index');
    }
}
