<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return Tag::all();
    }

    public function store(Request $request)
    {
        $tag = Tag::create($request->all());
        return response()->json($tag, 201);
    }

    public function show(Tag $tag)
    {
        return $tag;
    }

    public function update(Request $request, Tag $tag)
    {
        $tag->update($request->all());
        return response()->json($tag);
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return response()->json(null, 204);
    }
}
