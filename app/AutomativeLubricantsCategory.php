<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AutomativeLubricantsCategory extends Model
{
    public function automativeLubricants(){
        return $this->hasMany(\App\AutomativeLubricant::class,'category_id')->orderBy('order');
    }
}
