<?php

namespace App\Http\Controllers\Admin\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(PostCreateRequest $request)
    {
        $data = $request->validated();
//        $data['user_id'] = Auth::user()->id;
        $data['user_id'] = auth()->id();

        Post::create($data);

        return redirect()->route('admin.posts.index');

    }
}
