<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostService
{
    protected GateContract $gate;

    public function __construct(GateContract $gate)
    {
        $this->gate = $gate;
    }

    public function accessCreatePost(Post $post) 
    {
        $user = Auth::user();

        $this->gate->authorize('view', $post);

        $post = $user->post()->find($user->id);

        return [$user, $post];
    }

    public function createPost(Request $request)
    {
        $user = Auth::user();

        $this->gate->authorize('create', Post::class);

        $data = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'post_picture' => 'required|file',
        ]);

        if (!empty($input['post_picture']) && $input['post_picture']->isValid()) {
            $url = $input['post_picture']->store('profiles', 'public');
            $input['post_picture'] = $url;
            Post::create($input);
        };

        $post = $user->post()->updateOrCreate(
            [],
            array_merge($data, ['user_id' => $user->id])
        );

    }
}
