<?php
use App\Items;
use App\ItemType;

//获取所有物品
function TGetItems($itemType = null)
{
    if($itemType === null)
    {
        return Items::All();
    }
    else
    {
        
    }
}

//获取物品类型
function TGetItemType()
{
    return ItemType::All();   
}