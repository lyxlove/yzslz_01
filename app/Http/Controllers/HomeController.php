<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('Home/index');
    }

    function index1()
    {
        return view('Home/home');
    }
    //
}
