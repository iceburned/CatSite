<?php

namespace App\Http\Controllers;

use App\Models\ForumPosts;
use Illuminate\Http\Request;

class ForumPostsController extends Controller
{
    public function forum_posts()
    {
        return view('forum_posts');
    }

    public function forum_posts_create()
    {
        return view('forum_posts_create');
    }

    public function forum_posts_edit()
    {
        return view('forum_posts_edit');
    }

    public function forum_posts_delete()
    {
        return view('forum_posts_delete');
    }
}
