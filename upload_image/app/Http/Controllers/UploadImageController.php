<?php

namespace App\Http\Controllers;

use App\Models\UploadImage;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function show()
    {
        return view('upload_form');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|file|image|mimes:png,jpeg',
        ]);
        $upload_image = $request->file('image');

        if ($upload_image) {
            // アップロードされた画像を保存する
            $path = $upload_image->store('uploads', 'public');
            // 画像の保存に成功したらDBに記録する
            if ($path) {
                UploadImage::create([
                    'file_name' => $upload_image->getClientOriginalName(),
                    'file_path' => $path,
                ]);
            }
        }
        return redirect('/list');
    }
}
