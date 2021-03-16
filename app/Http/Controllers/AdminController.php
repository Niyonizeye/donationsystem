<?php

namespace App\Http\Controllers;

use App\Donors;
use App\Project;
use App\Comment;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $comment = Comment::all();
        $current = new Carbon();
        $projects=Project::all();
        $donors = Donors::all()->take(6)->sortByDesc('id');
        return view('admin.dashboard',compact('comment', 'donors','projects','current'));
    }
    // to create a project

    public function store( Request $request) {
        if($request->hasFile('img_src')){
            $data = request() -> all();
            $image=$request->file('img_src');
            $re_image=time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/img');
            $image->move($dest,$re_image);
            //$image->storeAs($dest,$re_image);
            $project=new Project;
            $project->img_alt=$request->img_alt;
            $project->img_src=$re_image;
            $project->name = $data['name'];
            $project->leader = $data['leader'];
            $project->description=htmlspecialchars($data['description']) ;
            $project->target_fund=$data['target_fund'];
            $project->save(); 
            session()->flash('success','Donoproject created successfully');    
            return redirect('/admin/projects')->with('message', 'Project Created Successfull!');    
          
       }  
    }

    public function destroy($projectId){

        $project = Project::find($projectId);
        $project->delete();
        session()->flash('success','project Deleted successfully');

        return redirect('/admin/add');

    }
}
