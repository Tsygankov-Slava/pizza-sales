<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Addresses;
use App\Models\BasketItem;
use App\Models\MenuItems;
use App\Models\OrderItems;
use App\Models\Orders;

class OrderController extends Controller {
    public function add(OrderRequest $req) {
        $client = auth()->user();

        $orders = new Orders;
        $orders->client_id = $client->id;
        $orders->payment_method = $req->input('payment');
        $orders->delivery_method = $req->input('delivery');
        $orders->comment = $req->input('comment');

        $addresses = new Addresses;
        $addresses->client_id = $client->id;
        $addresses->city = $req->input('city');
        $addresses->street = $req->input('street');
        $addresses->house = $req->input('house');
        $addresses->apartment = $req->input('apartment');
        $addresses->entrance = $req->input('entrance');
        $addresses->floor = $req->input('floor');
        $addresses->intercom = $req->input('intercom');
        $addresses->barrier = $req->input('barrier');

        $addresses->save();

        $orders->address_id = $addresses->id;

        $orders->status = 'created';
        $orders->save();


        $menuItem = BasketItem::where('basket_id', '=', $client->id)->get();
        foreach ($menuItem as $item) {
            $orderItem = new OrderItems;
            $orderItem->order_id = $orders->id;
            $orderItem->menu_item_id = $item->menu_item_id;
            $orderItem->quantity = 1;
            $orderItem->price = MenuItems::find($item->menu_item_id)->first()->price;
            $orderItem->save();
        }

        BasketItem::where('basket_id', '=', $client->id)->delete();

        return redirect()->route('home')->with('success', 'Order created successfully');
    }
    public function show() {
        $client = auth()->user();
        return view('orders', ['orders' => Orders::where('client_id', '=', $client->id)->get()]);
    }

    public function showItem($id) {
        $order = Orders::find($id)->first();
        return view('order-item', [
            'order' => $order,
            'address' => Addresses::find($order->address_id),
            'menu' => MenuItems::all(),
            'menuItem' => OrderItems::where('order_id', '=', $id)->get()
        ]);
    }
}
