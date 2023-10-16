@extends('layouts/app')

@section('title')Basket @endsection

@section('content')

    @php $totalCost = 0 @endphp
    @foreach($data as $el)
        @foreach($menu as $item)
            @if($el->menu_item_id == $item->id)
                @php
                    $totalCost += $item->price;
                @endphp
                <div class="alert alert-primary" style="width: 90%; margin: 0 auto 25px">
                    <h3> {{ $item->title}} </h3>
                    <h5>Description: {{ $item->description }}</h5>
                    <h5>Price: {{ $item->price }}$</h5>
                    <a href="{{ route('menu-item', $item->id) }}"><button class="btn btn-primary">More details</button></a>
                    <a href=" {{ route('basket-delete', $item->id) }}"><button class="btn btn-danger">Delete</button></a>
                </div>
            @endif
        @endforeach
    @endforeach
    <div style="width: 90%; margin: 0 auto 25px; right: 0;"> <h5>Total cost: {{ $totalCost }}$ </h5></div>
    <div style=" margin-left: 5%; margin-right: 5%">
        <form action="{{ route('order-add') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-3 mb-2">
                    <div class="form-outline">
                        <input type="text" name="city" id="city" placeholder="City" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="form-outline">
                        <input type="text" name="street" id="street" placeholder="Street" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="form-outline">
                        <input type="text" name="house" id="house" placeholder="House" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-md-3 mb-2">
                    <div class="form-outline">
                        <input type="text" name="apartment" id="apartment" placeholder="Apartment" class="form-control form-control-sm" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="text" name="entrance" id="entrance" placeholder="Entrance" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-outline">
                        <input type="text" name="floor" id="floor" placeholder="Floor" class="form-control form-control-sm" />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" name="intercom" id="intercom" placeholder="Intercom" class="form-control form-control-sm" />
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline">
                        <input type="text" name="barrier" id="barrier" placeholder="Barrier" class="form-control form-control-sm" />
                    </div>
                </div>
            </div>
            <div style="margin-bottom: 10px;">
                <textarea class="form-control" name="comment" id="comment" rows="8" placeholder="Comment"></textarea>
            </div>
            <div style="margin-bottom: 10px;">
                <select class="form-control form-control-sm" name="payment">
                    <option value="cash">Сash payment</option>
                    <option value="cashless">Cashless payment</option>
                </select>
            </div>
            <div style="margin-bottom: 10px;">
                <select class="form-control form-control-sm" name="delivery">
                    <option value="delivery">Delivery</option>
                    <option value="pickup">Pickup</option>
                </select>
            </div>
            <button class="btn btn-success" type="submit">Place an order</button>
        </form>
    </div>
@endsection
