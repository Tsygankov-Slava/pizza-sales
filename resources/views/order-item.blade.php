@extends('layouts/app')

@section('title')Order item @endsection

@section('content')
    <div class="alert alert-primary" style="width: 90%; margin: 0 auto 25px">
        <h4> Created at: {{ $order->created_at}} </h4>
        <h5> Payment method: {{ $order->payment_method}} </h5>
        <h5> Delivery method: {{ $order->delivery_method }}</h5>
        <h5> Comment: {{ $order->comment }} </h5>
        <h5> Status: {{ $order->status }} </h5>
        <br>
        <h4> Address </h4>
        <h5> City: {{ $address->city }} </h5>
        <h5> Street: {{ $address->street }} </h5>
        <h5> House: {{ $address->house }} </h5>
        <h5> Apartment: {{ $address->apartment }} </h5>
        <h5> Entrance: {{ $address->entrance }} </h5>
        <h5> Floor: {{ $address->floor }} </h5>
        <h5> Intercom: {{ $address->intercom }} </h5>
        <h5> Barrier: {{ $address->barrier }} </h5>
        <br>
        <h4> Products </h4>
        @php $totalCost = 0 @endphp
        @foreach($menuItem as $el)
            @foreach($menu as $item)
                @if($el->menu_item_id == $item->id)
                    @php
                        $totalCost += $item->price;
                    @endphp
                    <div class="alert alert-primary" style="width: 90%; margin: 0 auto 25px">
                        <h3> {{ $item->title}} </h3>
                        <h5>Description: {{ $item->description }}</h5>
                        <h5>Price: {{ $item->price }}$</h5>
                    </div>
                @endif
            @endforeach
        @endforeach
        <div style="width: 90%; margin: 0 auto 25px; right: 0;"> <h5>Total cost: {{ $totalCost }}$ </h5></div>
    </div>
@endsection
