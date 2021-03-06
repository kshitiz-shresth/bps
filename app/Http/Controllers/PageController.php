<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Page;
use App\Partner;
use App\Story;
use App\Team;
use App\TeamCategory;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Article;
use App\AutomativeLubricant;
use App\IndustrialLubricant;
use App\Download;
use App\DownloadCategory;
use App\MetalWorkingAndSpecialityLubricant;
use App\NewsArticle;
use App\Popup;

class PageController extends Controller
{
    public function file($filename){
        $path = public_path("myfiles/years/".$filename);

        if(file_exists($path)){
            return response()->file($path);
            return 'yes it exists';
        }
        abort(404);
        
    }
    
    public function automativeLubricants(){
        return view('pages.automative-lubricants.lists');
    }

    public function automativeLubricantsDetail($slug){
        $detail = AutomativeLubricant::where('slug',$slug)->first();
        $topName = "Automative Lubricants";
        $topLink = route('automativeLubricants');
        return view('pages.our-products.detail', compact(
            'detail',
            'topName',
            'topLink'
        ));
    }

    public function industrialLubricants()
    {
        return view('pages.industrial-lubricants.lists');
    }

    public function industrialLubricantsDetail($slug)
    {
        $detail = IndustrialLubricant::where('slug', $slug)->first();
        $topName = "Industrial Lubricants";
        $topLink = route('industrialLubricants');
        return view('pages.our-products.detail', compact(
            'detail',
            'topName',
            'topLink'
        ));
    }

    public function metalWorkingAndSpecialityLubricants()
    {
        return view('pages.metal-working-and-speciality-lubricants.lists');
    }

    public function metalWorkingAndSpecialityLubricantsDetail($slug)
    {
        $detail = MetalWorkingAndSpecialityLubricant::where('slug', $slug)->first();
        $topName = "Metal Working & Seciality Lubricants";
        $topLink = route('metalWorkingAndSpecialityLubricants');
        return view('pages.our-products.detail', compact(
            'detail',
            'topName',
            'topLink'
        ));
    }

    public function index(){
        return view('index');
    }

}
