<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index() {
        $projects = view('projects.allproject')->with('projects',Project::all());
        
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
      $projects = view('admin.add-project')->with('projects',Project::all());
        
      return $projects ;
     }

     public function create() {
        
     }
     public function store(Request $request) {
      $this->validate(request(),[
         'name' => 'required',
         'description'=>'required'
     ]);
     if($request->hasFile('img_src')){
      $data = request() -> all();
      $image=$request->file('img_src');
      $re_image=time().'.'.$image->getClientOriginalExtension();
      $dest=public_path('/img');
      $image->move($dest,$re_image);
      $project=new Project;
      $project->img_alt=$request->img_alt;
      $project->img_src=$re_image;
      $project->name = $data['name'];
      $project->description=$data['description'];
      $project->target_fund=$data['target_fund'];
      $project->save();
      session()->flash('success','Donoproject created successfully');
      return redirect('/admin/add')->with('mdg','Project is now created');
      
    }
        
     }
     public function show($id) {
    
     }
     public function edit($id) {
       
     }
     public function update(Request $request, $id) {

     }
     public function destroy($id) {
        
     }
}
