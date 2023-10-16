@extends('layouts/app')

@section('title')Menu @endsection

@section('content')
    @foreach($categories as $category)
        <h2 style="margin: 20px;"> {{ $category->category }} </h2>
        @foreach($data as $el)
            @if($el->category == $category->category)
                <div class="alert alert-primary" style="width: 90%; margin: 0 auto 25px">
                    <h3> {{ $el->title}} </h3>
                    <h5>Description: {{ $el->description }}</h5>
                    <h5>Price: {{ $el->price }}$</h5>
                    <a href="{{ route('menu-item', $el->id) }}"><button class="btn btn-primary">More details</button></a>
                    <a href=" {{ route('basket-add', $el->id) }}"><button class="btn btn-success">Add to basket</button></a>
                </div>
            @endif
        @endforeach
    @endforeach
@endsection
