<?php

namespace App\Http\Controllers;

use App\Models\BasketItem;
use App\Models\MenuItems;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BasketController extends Controller {
    public function show() {
        $client_id = auth()->user()->id;
        $menu = new MenuItems;
        $basketItem = new BasketItem;
        return view('basket', ['data' => $basketItem->where('basket_id', '=', $client_id)->get(), 'menu' => $menu->all()]);
    }

    public function addItem($id): RedirectResponse{
        $client_id = auth()->user()->id;
        $basketItem = new BasketItem;

        $basketItem->basket_id = $client_id;
        $basketItem->menu_item_id = $id;

        $basketItem->save();
        return redirect()->route('menu')->with('success', 'The product was successfully added');
    }

    public function deleteItem($id): RedirectResponse {
        BasketItem::where('menu_item_id', '=', $id)->first()->delete();
        return redirect()->route('basket')->with('success', 'The product was successfully deleted');
    }
}
