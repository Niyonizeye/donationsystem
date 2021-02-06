<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin-project');
    }
    public function destroy($projectId){

        $project = Project::find($projectId);
        $project->delete();
        session()->flash('success','project Deleted successfully');

        return redirect('/admin/add');

    }
}
