<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function createComment(Request $request) {
        Auth::user()->toComment()->create([
            'field_id' => $request->fieldId,
            'text_com' => $request->text_com
        ]);

        // $response = Comment::latest()->first();

        // return $response;
    }

    public function output(Request $request) {
        $authUser = Auth::user();
        $selectField = $request->field;

        $comments = Comment::where([
            'user_id' => $authUser->id,
            'field_id' => $selectField
        ])->get();

        $response = array();

        foreach ($comments as $comment) {
            $response[] = 
            '<div class="comment">
                <h2 class="comment__username">'. $authUser->name .'</h2>
                <p class="comment__text">'. $comment->text_com .'</p>
                <p class="comment__date">'. $comment->created_at .'</p>
            </div>';
        }

        return $response;
    }
}
