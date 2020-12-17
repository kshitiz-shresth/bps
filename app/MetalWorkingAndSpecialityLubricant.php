<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MetalWorkingAndSpecialityLubricant extends Model
{
    public function category(){
        return $this->belongsTo(\App\MetalWorkingAndSpecialityLubricantsCategory::class,'category_id');
    }
}
