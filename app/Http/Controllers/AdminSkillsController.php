<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;   

class AdminSkillsController extends Controller
{
   
    public function index()
    {
        $skills =Skill::all();
        return view('AdminSkills.index', compact('skills'));
    }

  
    public function create()
    {
        return view('AdminSkills.create_skills');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'technology' => 'required',
            'score' => 'required'
        ]);

        $skill = new Skill;
        $skill->technology = $request->technology;
        $skill->score = $request->score;
        $skill->save();
        return redirect()->route('admin.skills.create')->with('success', 'Skills Created Successfully');


    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();

        return redirect()->route('admin.skills.index')->with('success','Data Deleted Successfully' );
    }
}
