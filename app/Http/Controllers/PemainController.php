<?php

namespace App\Http\Controllers;

use App\Models\pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index() {
        $no = 0;
        $data_pemain = pemain::all();

        return view('index', compact('data_pemain', 'no'));
    }
}
