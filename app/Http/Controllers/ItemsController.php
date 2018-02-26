<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;

class ItemsController extends Controller
{
    public function index()
    {
        $data = Items::all();
       
        return view('Items/index',compact('data'));
    }
}
