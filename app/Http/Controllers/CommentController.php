<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    // main function to handle all requests including search and pagination functionality
    public function index(Request $request)
    {
        $data = Comment::where('username', 'LIKE', '%' . $request->search . '%')
        ->orWhere('comment', 'LIKE', '%' . $request->search . '%')
        ->paginate($request->results);
        return response()->json($data, 200);
    }
}
