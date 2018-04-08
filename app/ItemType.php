<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemType extends Model
{
    protected $table = "y_item_type";

    protected $primarykey = "item_type_id";

    protected $guarder = ['updated_at','created_at'];

    protected $fillable = ['item_type'];
}
