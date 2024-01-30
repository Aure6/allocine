<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Category;
use App\Models\Media;
use Illuminate\Foundation\Http\Middleware\HandlePrecognitiveRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medias = Media::latest()->paginate(15);
        $categories = Category::get();

        return Inertia::render('Dashboard', [
            'medias' => $medias,
            'categories' => $categories,
            // dd($categories)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    //

    /**
     * Display the specified resource.
     */
    public function show(Media $task)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $task)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Media $task)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $task)
    {
    }
}
