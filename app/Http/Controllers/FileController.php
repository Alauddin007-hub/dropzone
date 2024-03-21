<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;

class FileController extends Controller
{
    public function index()
    {
        return Inertia::render('Index');
    }

    public function upload(Request $request)
{
    $request->validate([
        'file' => 'required|file|max:10240', // Maximum 10GB file size
    ]);

    $file = $request->file('file');
    $uniqueId = Str::uuid(); // Generate unique ID
    $fileName = $uniqueId . '_' . $file->getClientOriginalName(); // Append unique ID to file name

    $image_path = '';

    if ($request->hasFile('file')) {
        $image_path = $file->storeAs('uploads', $fileName);
    }

    $data = File::create([
        'unique_id' => $uniqueId,
        'file_name' => $fileName,
        'file_path' => $image_path,
    ]);

    return Redirect::route('image.index');
}

    

    
}
