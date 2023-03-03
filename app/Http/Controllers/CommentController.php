<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create($id)
    {
        $post = Post::with(['user'])->findOrFail($id);
        return view('comment.create', compact('post'));
    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'body' => 'required',
        ]);
        
        $data['user_id'] = Auth::user()->id;
        
        Comment::create($data);

        return redirect()->back();
    }
}
