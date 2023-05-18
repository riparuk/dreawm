<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progress;
use App\Models\Dream;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProgressController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $request->validate([
            'description' => 'required|string',
            'dream_id' => 'required|exists:dreams,id',
        ]);

        // Buat instance Progress baru
        $progress = new Progress();
        $progress->description = $request->input('description');

        $dream = Dream::findOrFail($request->input('dream_id'));
        if ($dream->user_id !== Auth::id()) {
            // Jika tidak ada hubungan, lakukan penanganan yang sesuai, misalnya mengembalikan response dengan error
            return response()->json(['error' => 'Dream not found or unauthorized.'], 403);
        }
        $progress->dream_id = $request->input('dream_id');
        // Simpan instance Progress ke database
        $progress->save();

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()
            ->route('dream.show', $progress->dream_id)
            ->with('success', 'Progress created successfully.');
    }
}
