@extends('layouts.default')

@section('content')
    <h1>questa sarà la home</h1>
    <ul>
        @foreach ($items as $item)
            <li><a href="{{ route('comics.show', $item->id) }}">{{ $item->title }}</a></li>
        @endforeach
    </ul>
    
    <a href="{{ route('comics.create') }}">Aggiungi articolo</a>
    
@endsection