@extends('layout')

@section('title', 'Accueil')

@section('content')

    <h1 class="h3">Page d'accueil</h1>
    
    @include('partials.events', ['events' => $events])
    
    <nav>
        <a href="{{ route('events.index') }}">Voir tous les évenements</a>
    </nav>
    
@endsection