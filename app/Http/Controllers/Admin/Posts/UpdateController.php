<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(PostUpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $post->update($data);
        return redirect()->route('admin.posts.index');

    }
}
