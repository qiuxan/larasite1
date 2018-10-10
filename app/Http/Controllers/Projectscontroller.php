<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class Projectscontroller extends Controller
{
    //
    public function index(){

        $project=Project::all();

        return $project;
        return view('projects.index');
    }


}
