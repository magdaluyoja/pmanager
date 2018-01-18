<?php

namespace App\Http\Controllers;

use App\Project;
<<<<<<< HEAD
use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Http\Request;
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        if( Auth::check() ){
            //$projects = Project::all();//retrieve all rows in the Project table
            $projects = Project::where('user_id', Auth::user()->id)->get();
            return view('projects.index', ['projects'=>$projects]);
        }
        return view('auth.login');
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function create($company_id=null)
    {
        
        $company = Company::where("user_id", Auth::user()->id)->get();
        $disabled = "";
        if($company_id == $company->id){
            $disabled = 'disabled';
        }
        return view('projects.create', ['company_id'=>$company_id, 'company'=>$company, 'disabled'=>$disabled]);
=======
    public function create()
    {
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        if(Auth::check()){
            $project = Project::create([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'days' => $request->input('duration'),
                'company_id' => $request->input('company_id'),
                'user_id' => Auth::user()->id
            ]);
            if($project){
                return redirect()->route('projects.show', ['project'=> $project->id])
                ->with('success' , 'Project created successfully');
            }
        }
        
        return back()->withInput()->with('errors', 'Error creating new project');
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
<<<<<<< HEAD
        $project = Project::find($project->id);
        $comments = $project->comments;
        return view('projects.show', ['project'=>$project, 'comments'=> $comments ]);
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
<<<<<<< HEAD
        $project = Project::find($project->id);
        return view('projects.edit',['project'=>$project]);
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
<<<<<<< HEAD
        
        $projectUpdate = Project::where('id', $project->id)
        ->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'days'=>$request->input('duration'),

        ]);
        if ($projectUpdate ) {
            return redirect()->route('projects.show',['id'=>$project->id])->with('success', 'Project updated successfully.
                ');
        }
        return back()->withInput();
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
<<<<<<< HEAD
        $findProject = Project::find( $project->id);
        if($findProject->delete()){
            
            //redirect
            return redirect()->route('projects.index')
            ->with('success' , 'Project deleted successfully.');
        }
        return back()->withInput()->with('error' , 'Project could not be deleted');
=======
        //
>>>>>>> e46cf0ed26bb36339887943a176b7ae32b91cf2d
    }
}
