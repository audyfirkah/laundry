<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index()
    {
        $data = Cabang::all();

        return view('pages.admin.cabang.index', compact('data'));
    }
}
