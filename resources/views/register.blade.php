@extends('layout')

@section('title', 'Inscription')

@section('content')

<h1>Inscription</h1>
    <form method="post" action="{{ route('signup') }}">
        @csrf
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" class="form-control">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">

        <label for="confirm-password">Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" id="confirm-password" class="form-control">

        <button>S'inscrire</button>
    </form>

@endsection