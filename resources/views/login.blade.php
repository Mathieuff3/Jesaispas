@extends('layout')

@section('title', 'Connexion')

@section('content')

<h1>Se connecter</h1>

    <form method="post" action="{{ route('signin') }}">
        @csrf
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="name" id="username">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">

        <button>Se connecter</button>
    </form>

@endsection