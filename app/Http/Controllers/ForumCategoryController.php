<?php

namespace App\Http\Controllers;

use App\Models\ForumCategory;
use Illuminate\Http\Request;

class ForumCategoryController extends Controller
{

    public function index()
    {
        $categories = ForumCategory::latest()->take(3)->get();
        return view('index', ['categories' => $categories]);
    }

    public function category_create()
    {
        $categories = ForumCategory::latest()->take(3)->get();
        return view('forum_category_create', ['categories' => $categories]);
    }

    public function category_edit()
    {
        $categories = ForumCategory::latest()->take(3)->get();
        return view('forum_category_edit', ['categories' => $categories]);
    }

    public function category_delete()
    {
        $categories = ForumCategory::latest()->take(3)->get();
        return view('forum_category_delete', ['categories' => $categories]);
    }
}
