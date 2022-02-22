<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\CommentModel;
use Illuminate\Http\Request;

class CommentModelController extends Controller
{
    public function index()
    {
        $comments = CommentModel::with('childComment')->where('parent_id', null)->orderBy('created_at', 'desc')->get();
        return CommentResource::collection($comments);
    }

    public function insert(CommentRequest $request)
    {
        
        $comment = CommentModel::create($request->validated());

        return $comment;
    }
}
