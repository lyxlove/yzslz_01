<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DayPrice;
use App\Items;
use App\ItemType;
use Illuminate\Support\Facades\DB;

class DayPriceController extends Controller
{
    public function index()
    {
        $typeList = ItemType::all();

        $sqlStr = "SELECT c.price,c.record_day,y_items.item_name FROM (
            SELECT a.* FROM y_day_price a,(SELECT max(b.record_day) AS record_day,item_id FROM y_day_price b GROUP BY item_id)  b
            WHERE a.item_id = b.item_id AND a.record_day = b.record_day) as  c
            INNER JOIN 	y_items ON y_items.item_id = c.item_id";
        $list = DB::select($sqlStr);
        foreach($list as $mlist)
        {
            $mlist->price =$this->GetGold($mlist->price);
        }
        return view('DayPrice/index',compact('list','typeList'));
    }

    public  function GetGold($price)
    {
        $gold = floor($price);
        $price = ($price - $gold)*100;
        $sliver = floor($price);
        $price = ($price - $sliver)*100;
        $cooper = floor($price);
        return $gold."金".$sliver."银".$cooper."铜";
    }

    public function DayPriceDetail()
    {
        $list = Items::all();
        return view('DayPrice/dayprice_add',compact('list'));
    }

    public function SaveDayPrice()
    {
        DayPrice::create($_POST);
        return 0;
    }

}
