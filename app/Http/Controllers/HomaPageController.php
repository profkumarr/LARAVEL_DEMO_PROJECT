<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;    
use App\Models\Project;  
use App\Models\Skill;

class HomaPageController extends Controller
{
    
    public function index()
    {
        //Dynamic data to Home Page
        // $project = Project::limit(3) -> it means only display 3 records

        //$projects = Project::all();
        $projects = Project::paginate(1); // its display only 2 content with page number
        $skills = Skill::all();
        return view('UsersPanel.HomePage', compact('projects', 'skills'));
    }

    
    public function showSkillsChart()
    {
        $skills = Skill::all();
        return view('UsersPanel.Skills.show_skills_chart', compact('skills'));
    }
    
    public function detail($id)
    {
        $project = Project::find($id);
        return view('UsersPanel.showdetails', compact('project'));
    }
    
    //search function
    public function search(Request $request)
    {
        $query = $request->input('query');
        $searched_data = Project::where('title', 'like', "%$query%")
        ->orWhere('description', 'like', "%$query%")
        ->get();  // i.e select title from Projects where `title` LIKE $query or 'description' LIKE $query
 
        return view('UsersPanel.search_page', compact('searched_data'));
    }
    
    

   
    
}
