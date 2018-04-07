<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemType;
use Illuminate\Support\Facades\DB;  


class ItemTypeController extends Controller
{
    public function index()
    {
        $data = ItemType::all();
        return view("ItemType/index",compact('data'));
    }

    public function SaveItemType()
    {
        $data = ItemType::create($_POST);
        return 0;        
    }
    

    public function ItemTypeDetail()
    {
        return view('ItemType/itemtype_add');
    }

    public function DeleteItemType($id)
    {
        DB::table('y_item_type')->where('item_type_id',$id)->delete();
    }
}
