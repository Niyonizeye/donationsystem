<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index() {
        $projects = view('admin.projects')->with('projects',Project::all());
        
        return $projects ;
     }
     public function indexProject(){
        $projects = view('welcome')->with('projects',Project::all());
        
        return $projects ;

     }
     public function projectDonorform(){
      $projects = view('donors.donate-form')->with('projects',Project::all());
      
      return $projects ;

   }
    
     public function adminproject(){
      $projects = view('admin.add-project1')->with('projects',Project::all());
        
      return $projects ;
     }

     public function show($id) {
    
     }
     public function edit() {
      $projects = view('admin.Edit-project')->with('projects',Project::all());
      
      return $projects ;
     }
     public function update(Request $request, $id) {

     }
     public function destroy($id) {
        
     }
}
