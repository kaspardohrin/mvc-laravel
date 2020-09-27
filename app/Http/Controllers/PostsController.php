<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function index()
    {
        return view('post.index', compact('post'));
    }

    protected function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'tag' => ['exsists:tags, id'],
        ]);

        $postItem = new PostItem();
        $postItem->title = $request->get('title');
        $postItem->body = $request->get('body');
        $postItem->tag_id = $request->get('tag');

        $postItem->save();

        return redirect('posts')->with('success', 'Post posted successfully! :)');
    }

    protected function create(Request $request)
    {
        return;
    }

    protected function detail(Request $request)
    {
        return;
    }
}