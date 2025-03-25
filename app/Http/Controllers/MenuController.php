<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        $data = Menu::all();

        return view('pages.admin.menu.index', compact('data'));
    }
}
