<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function delete(Request $request, int $id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('posts.index');
    }
    function softDeletedPosts()
    {
        $softDeletedPosts = Post::getSoftDeletedPosts();
    }
    public function postsByCategory(Request $request, int $id)
    {
        $category = Category::find($id);
        $posts = $category->posts;

        return view('posts', compact('posts'));
    }
}
