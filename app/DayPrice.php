<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayPrice extends Model
{
    protected $table = "y_day_price";

    protected $primarykey = "day_price_id";
  
    protected $guarded = ['updated_at','created_at'];

   
}
