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
    }
}
