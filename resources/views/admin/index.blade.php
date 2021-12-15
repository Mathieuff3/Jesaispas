@extends('layout')

@section('title', 'Administration')

@section('content')

    <h1>Administration</h1>
    
    <nav class="my-3">
        <a class="btn btn-primary" href="{{ route('events.create') }}">Créer un nouvel article</a>
    </nav>
    
    {{ $events->links() }}
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Catégorie</th>
                <th>Auteur</th>
                <th>Day</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->category->name }}</td>
                    <td>{{ $event->user->name }}</td>
                    <td>{{ $event->day }}</td>
                    <td><a href="{{ route('events.edit', ['id' => $event->id]) }}">Modifier</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection