@extends('layouts/app')

@section('title')Menu item @endsection

@section('content')
    <div class="alert alert-primary" style="width: 90%; margin: 0 auto 25px">
        <h3> {{ $data->title}} </h3>
        <h5>Category: {{ $data->category }}</h5>
        <h5>Description: {{ $data->description }}</h5>
        <h5>Price: {{ $data->price }}$</h5>
        <h5>Composition: {{ $data->composition }}</h5>
        <h5>Calories: {{ $data->calories }}</h5>
    </div>
@endsection
