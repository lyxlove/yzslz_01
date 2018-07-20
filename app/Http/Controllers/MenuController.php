<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        
    }

    public function GetMenuList()
    {
        $data = Menu::all();
        return json_encode($data);
        
    }
}
