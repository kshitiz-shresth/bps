<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function showProject($slug){
        $project = Project::where('slug',$slug)->first();
        $titleSplit = preg_split('/\s+/',$project->title);
        $shortForm = '';
        foreach($titleSplit as $item){
            $shortForm = $shortForm.$item[0];
        }
        return view('projects.show',compact(
            'project',
            'shortForm'
        ));
    }


    public function generateImages(Request $request){

    }
}
