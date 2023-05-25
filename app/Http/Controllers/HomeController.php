<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $trains = Train::where('data_di_partenza', '2023/05/25')->get();
        return view('home', compact('trains'));
    }
}
