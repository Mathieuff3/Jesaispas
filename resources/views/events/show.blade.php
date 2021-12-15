@extends('layout')

@section('title', $event->title)

@section('content')

    <article>
        <header class="border-bottom py-2">
            <h1>{{ $event->title }}</h1>
            <small>Rédigé par {{ $event->user->name }} le {{ $event->day }}</small>
        </header>
        {!! nl2br(e($event->content)) !!}
    </article>
    
    

@endsection