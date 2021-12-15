@extends('layout')

@section('title', 'Accueil')

@section('content')

    <h1 class="h3">Tous les évenements</h1>
    
    {{ $events->links() }}
    
    @include('partials.events', ['events' => $events])
    
@endsection