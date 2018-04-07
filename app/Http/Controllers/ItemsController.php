<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Items;
use App\ItemType;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    public function index()
    {
        //date_default_timezone_set("Asia/Shanghai");
      //  return date('y-m-d H:i:s',time());
        $data = Items::all();
        return view('Items/index',compact('data'));
    }

    public function SaveItem()
    {
  
       $data = Items::create($_POST);
        return 0;
    }

    public function ItemsDetail()
    {
        $list = ItemType::all();
        return view('Items/items_add',compact('list'));
    }

    public function GetItemList()
    {
        $itemList = DB::select("select * from y_items");        
    }

    public function DeleteItem($id)
    {
        DB::table('y_items')->where('item_id',$id)->delete();
    }
}
