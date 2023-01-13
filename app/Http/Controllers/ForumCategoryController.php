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
        return view('forum_category_create');
    }

    public function category_create_custom(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();

        $this->create($data);

        return redirect("/")->withSuccess('Category created');
    }

    public function create(array $data)
    {
        return ForumCategory::create([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
    }

    public function category_edit($id)
    {
        return view('forum_category_edit',['id'=>$id]);
    }

    public function category_edit_custom(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $data = $request->all();
        $this->update($data, $id);

        return redirect("/")->withSuccess('Category updated');
    }

    public function update(array $data, $id)
    {
        return ForumCategory::whereId($id)->update([
            'title' => $data['title'],
            'description' => $data['description']
        ]);
    }

    public function category_delete($id)
    {
        $record = ForumCategory::whereId($id)->get();

        return view('forum_category_delete', ['id' => $id, 'record' => $record]);
    }

    public function category_delete_custom($record)
    {
        ForumCategory::whereId($record)->delete();
        return redirect("/")->withSuccess('Category updated');
    }
}
