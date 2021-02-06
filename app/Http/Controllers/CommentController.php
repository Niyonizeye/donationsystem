<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // create comment
    public function store(Request $request) {
        $this->validate(request(),[
           'name' => 'required',
       ]);
  
       $data = request() -> all();
       $comment = new Comment();
       $comment->name = $data['name'];
       $comment->save();
       session()->flash('success','comment created successfully');
       return redirect('/donor');
          
       }
}
