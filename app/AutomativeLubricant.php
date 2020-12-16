<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AutomativeLubricant extends Model
{
    public function category(){
        return $this->belongsTo(\App\AutomativeLubricantsCategory::class,'category_id');
    }
}
