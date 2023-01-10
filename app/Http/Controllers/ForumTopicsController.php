<?php

namespace App\Http\Controllers;

use App\Models\ForumTopics;
use Illuminate\Http\Request;

class ForumTopicsController extends Controller
{
    public function forum_topics()
    {
        $topics = ForumTopics::latest()->take(3)->get();
        return view('forum_topics', ['topics' => $topics]);
    }

    public function forum_topics_create()
    {
        $topics = ForumTopics::latest()->take(3)->get();
        return view('forum_topic_create', ['topics' => $topics]);
    }

    public function forum_topics_edit()
    {
        $topics = ForumTopics::latest()->take(3)->get();
        return view('forum_topic_edit', ['topics' => $topics]);
    }

    public function forum_topics_delete()
    {
        $topics = ForumTopics::latest()->take(3)->get();
        return view('forum_topic_delete', ['topics' => $topics]);
    }
}
