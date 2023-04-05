<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    //
    public function index(Request $request)
    {
        // return Comment::all();
        $data = Comment::paginate($request->results);
        return response()->json($data, 200);
    }

    public function search(Request $request)
    {
        $data = Comment::where('username', 'LIKE', '%' . $request->search . '%')
            ->orWhere('comment', 'LIKE', '%' . $request->search . '%')
            ->get();
        return response()->json($data, 200);
        // return response()->json([
        //     'res' => $request->search
        // ]);
    }
}
