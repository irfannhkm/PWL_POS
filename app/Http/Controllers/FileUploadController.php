<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }
    public function prosesFileUpload(Request $request)
    {
        $request->validate([
            'nama_gambar' => 'bail|required|string|min:5',
            'gambar' => 'bail|required|image|mimes:jpeg,png,jpg,gif|max:500'
        ]);

        $namaGambar = $request->input('nama_gambar');
        $file = $request->file('gambar');
        $originalFileName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $fileName = $namaGambar . '.' . $extension;
        $fileSize = $file->getSize(); // get the size before moving the file
        $uploadPath = public_path('uploads');
        $filePath = '/uploads/' . $fileName;

        $file->move($uploadPath, $fileName);

        $uploadTime = now(); // current timestamp

        return view('upload-result', [
            'originalFileName' => $originalFileName,
            'fileName' => $fileName,
            'fileSize' => $fileSize,
            'extension' => $extension,
            'uploadTime' => $uploadTime,
            'filePath' => $filePath,
        ]);
    }
}
