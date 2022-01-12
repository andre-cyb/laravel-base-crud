@extends('layouts.default')

@section('content')
    <h1>questa sarà la home</h1>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ul>
@endsection