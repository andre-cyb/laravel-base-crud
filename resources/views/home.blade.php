@extends('layouts.default')

@section('content')
    <h1>questa sarà la home</h1>

    @if (session("msg"))
        <div class="alert alert-success">{{ session("msg") }}</div>
    @endif

    <ul>
        @foreach ($items as $item)
            <li><a href="{{ route('comics.show', $item->id) }}">{{ $item->title }}</a></li>
        @endforeach
    </ul>
    
    <a href="{{ route('comics.create') }}">Aggiungi articolo</a>
    
@endsection