@extends('layout')

@section('title', 'Modification article')

@section('content')

    <h1>Modifier un évenement</h1>
    
    <form method="post" action="{{ route('events.update', ['id' => $event]) }}">
        @csrf
        <div class="form-group">
            <label for="title">Titre</label>
            <input value="{{ $event->title }}" type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" cols="30" rows="15">{{ $event->content }}</textarea>
            @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="category">Catégorie</label>
            <select name="category" id="category" class="form-control">
                @foreach($categories as $category)
                    <option @if($event->category_id === $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <button class="btn btn-primary">Modifier</button>
        </div>
    </form>
    
@endsection