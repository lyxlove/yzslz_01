<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = "y_items";

    protected $primarykey = "item_id";
  
    protected $guarded = ['updated_at','created_at'];
}
