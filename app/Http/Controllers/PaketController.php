<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function index(){
        $data = Paket::all();

        return view('pages.admin.paket.index', compact('data'));
    }
}
