@extends('layouts.default')

@section('content')
{{-- @dump($comic) --}}
    
    <ul>
        <li>
            <img src="{{ $comic->thumb }}" width="100px" alt="">
        </li>
        <li>
            <h2> {{ $comic->title }}</h2>
        </li>
        <li>
            <p>{{ $comic->description }}</p>
        </li>
        <li>
            <p>{{ $comic->price }} $</p>
        </li>
        <li>
            <p>{{ $comic->series }}</p>
        </li>
        <li>
            <p>{{ $comic->sale_date }}</p>
        </li>
        <li>
            <p>{{ $comic->type }}</p>
        </li>
    </ul>

    <div>
        {{-- <a href="{{ route('comics.create') }}">Aggiungi articolo</a> --}}
    </div>
    <div>
        <a href="{{ route('comics.edit', $comic->id) }}">midifica l'articolo</a>
    </div>
    <div>
        <a href="{{ route('comics.index') }}">torna alla pagina principale</a>
    </div>
    
    <div class="mt-3 text-danger">
        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn-danger btn">Elimina articolo</button>

        </form>
    </div>

    


@endsection