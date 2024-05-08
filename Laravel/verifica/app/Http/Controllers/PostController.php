<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['posts', Post::with('category')->get()]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        // $insertedData = $request->only(['title', 'content', 'category_id']);
        $insertedData = $request->validated();
        $r = Post::create($insertedData);
        return response()->json([
            'message' => 'Post created successfully.',
            'id' => $r
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'post' => Post::query()->with('category')->where('id', $id)->firstOrFail()
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id)
    {
        Log::debug('bb');

        $updatedData = $request->validated();
        // $updatedData = $request->only(['title', 'content', 'category_id']);
        Post::query()->where('id', $id)->update($updatedData);
        return response()->json([
            'message' => 'Post updated successfully.',
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::query()->where('id', $id)->delete();
        return response()->json([
            'message' => 'Post deleted successfully'
        ]);
    }

    public function searchPost(string $title)
    {
        return response()->json([
            Post::query()->with('category')->where('title', $title)->firstOrFail()
        ]);
    }
}
