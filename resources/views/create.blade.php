@extends('layouts.default')

@section('content')
    <h1>qui metterò il form</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-4">
                <label for="" class="form-label">title</label>
                <input type="text"class="form-control" name="title" >
            </div>
            <div class="mb-4">
                <label for="" class="form-label">description</label>
                <input type="text"class="form-control" name="description" >
            </div>
            <div class="mb-4">
                <label for="" class="form-label">thumb</label>
                <input type="text"class="form-control" name="thumb" >
            </div>
            <div class="mb-4">
                <label for="" class="form-label">price</label>
                <input type="text"class="form-control" name="price" >
            </div>
            <div class="mb-4">
                <label for="" class="form-label">series</label>
                <input type="text"class="form-control" name="series" >
            </div>
            <div class="mb-4">
                <label for="" class="form-label">sale_date</label>
                <input type="text"class="form-control" name="sale_date" >
            </div>
            <div class="mb-4">
                <label for="" class="form-label">type</label>
                <input type="text"class="form-control" name="type" >
            </div>
            <button type="submit" class="btn btn-primary">aggiungi</button>
        </form>

    </div>
@endsection