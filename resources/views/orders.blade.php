@extends('layouts/app')

@section('title')Orders @endsection

@section('content')
        @php $count = 1; @endphp
        @foreach($orders as $order)
            <div class="alert alert-primary" style="width: 90%; margin: 0 auto 25px">
                <h3> #{{ $count }} </h3>
                @php $count++; @endphp
                <h4> Created at: {{ $order->created_at}} </h4>
                <h5> Payment method: {{ $order->payment_method}} </h5>
                <h5> Delivery method: {{ $order->delivery_method }}</h5>
                <h5> Comment: {{ $order->comment }} </h5>
                <h5> Status: {{ $order->status }} </h5>
                <a href="{{ route('order-item', $order->id) }}"><button class="btn btn-success">More details</button></a>
            </div>
        @endforeach
@endsection
