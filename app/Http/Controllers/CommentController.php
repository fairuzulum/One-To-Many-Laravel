<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request){
        $validated = $request->validate([
            'comment' => 'required'
        ]);

        Comment::create([
            'post_id' => $request['postid'],
            'comment' => $validated['comment']
        ]);

        $post = Post::findOrfail($request['postid']);

        return redirect( route('posts.show', $request['postid']) );
    }

    public function destroy($id)
    {
        $comment = Comment::findOrfail($id);
        $comment->delete();
        return redirect( route('posts.show', $comment->post_id));
    }
}
