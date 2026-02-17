<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function postPublication(Post $post)
    {
        $data = $this->postService->accessCreatePost($post);

        return view('users.postPublication', [
            'user' => $data[0]
        ]);
    }
}
