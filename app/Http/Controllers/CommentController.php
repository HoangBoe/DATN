<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function getAllComment(){
        return Comment::all();
    }

    public function getComment(Request $id){
        return Comment::find($id);
    }
}
