<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "y_menu";

    protected $primarykey = "id";
    
    protected $guarded = ['updated_at','created_at'];
    
}
