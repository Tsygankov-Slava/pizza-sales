<?php

namespace App\Http\Controllers;

use App\Models\MenuItems;

class MenuController extends Controller {
    public function showAllItems() {
        $menu = new MenuItems;
        return view('menu',
            ['categories' => $menu->distinct()->select('category')->get(),
            'data' => $menu->all()]);
    }

    public function showItem($id) {
        return view('menu-item', ['data' => MenuItems::find($id)]);
    }
}
