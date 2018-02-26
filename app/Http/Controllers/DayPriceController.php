<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\day_price;

class DayPriceController extends Controller
{
    public function index()
    {
        $data = day_price::all();
        
          return;
    }
}
