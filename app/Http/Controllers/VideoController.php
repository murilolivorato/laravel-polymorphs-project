<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return Video::with(['comments', 'tags'])->get();
    }

    public function store(Request $request)
    {
        $video = Video::create($request->all());
        return response()->json($video, 201);
    }

    public function show(Video $video)
    {
        return $video->load(['comments', 'tags']);
    }

    public function update(Request $request, Video $video)
    {
        $video->update($request->all());
        return response()->json($video);
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return response()->json(null, 204);
    }
}
