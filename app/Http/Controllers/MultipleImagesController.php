<?php

namespace App\Http\Controllers;

use App\MultipleImage;
use Illuminate\Http\Request;

class MultipleImagesController extends Controller
{
    public function generateImages(Request $request){
        $images = MultipleImage::where('unique_id',$request->sliderID)->first();
        if(!$images){
            return 0;
        }
        return $images->images;
        
    }
}
