<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class IndustrialLubricant extends Model
{
    public function category(){
        return $this->belongsTo(\App\IndustrialLubricantsCategory::class,'category_id');
    }
}
