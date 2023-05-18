<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dream;
use App\Models\Category;
use App\Models\Status;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class DreamController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $dreams = Dream::with('user', 'category', 'status')
                ->orderBy('created_at', 'desc')
                ->get();
            $categories = Category::all();
            $statuses = Status::all();

            return view('home', compact('dreams', 'categories', 'statuses'));
        } else {
            return view('welcome');
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'status_id' => 'required|exists:statuses,id',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $dream = new Dream();
        $dream->title = $validatedData['title'];
        $dream->description = $validatedData['description'];
        $dream->is_public = $request->boolean('is_public');
        $dream->user_id = Auth::id();
        $dream->category_id = $validatedData['category_id'];
        $dream->status_id = $validatedData['status_id'];

        // Mengelola file gambar yang diupload
        $image = $request->file('image');
        if ($image) {
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = 'public/dream_images';
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path);
            }
            $image->storeAs($path, $filename);
            $dream->image = $filename;
        }

        $dream->save();

        return redirect()
            ->route('dreams.index')
            ->with('success', 'Your Dream created successfully.');
    }

    public function show(Request $request, $id)
    {
        $dream = Dream::findOrFail($id);

        return view('dream.show', compact('dream'));
    }
}
