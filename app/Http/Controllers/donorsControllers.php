<?php

namespace App\Http\Controllers;

use App\Donors;
use App\Project;
use App\Comment;

use Illuminate\Http\Request;

class donorsControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $donors = Donors::all();
        return view('welcome',compact('donors'));
        
    }
    public function donorPage()
    {
        $comment = Comment::all();
        $projects=Project::all();
        $donors = Donors::all()->take(6)->sortByDesc('id');
        return view('donors.donor', compact('comment', 'donors','projects'));
    }
    public function adminUser()
    {
        $donors = view('admin.manage-user')->with('donors', Donors::all()
         ->sortByDesc('id'));
        return $donors;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate(request(),[
            'name' => 'required',
            'email' => 'required',
            'phoneNumber'=>'required'
        ]);

        $data = request() -> all();
        $donor = new Donors();
        $donor->identity = $data['identity'];
        $donor->name = $data['name'];
        $donor->email = $data['email'];
        $donor->phoneNumber = $data['phoneNumber'];
        $donor->currency = $data['currency'];
        $donor->amount = $data['amount'];
        $donor->save();
        session()->flash('success','Donor created successfully');
        return redirect('/donor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
