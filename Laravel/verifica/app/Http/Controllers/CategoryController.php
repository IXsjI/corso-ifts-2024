<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['categories', Category::all()]);

    }

    public function countPost(string $id)
    {
        return response()->json([
            'Post con categoria '.$id => Post::query()->where('category_id', $id)->count()
        ]);
    }


}
