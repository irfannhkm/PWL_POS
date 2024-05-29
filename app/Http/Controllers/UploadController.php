<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index() {
        $breadcrumb = (object)[
            'title' => 'Upload Image ',
            'list' => ['Home', 'Upload Image', 'Upload']
        ];

        $page = (object)[
            'title' => 'Upload New Image'
        ];

        $activeMenu = 'uploadGambar';

        return view('uploadGambar', [
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu
        ]);
    }
    public function prosesUploadGambar(Request $request) {
        $request->validate([
            'nama_gambar' => 'bail|required|string|min:5',
            'gambar' => 'bail|required|image|mimes:jpeg,png,jpg,gif|max:5000'
        ]);

        $breadcrumb = (object)[
            'title' => 'Show Image',
            'list' => ['Home', 'Show Image', 'Show']
        ];

        $page = (object)[
            'title' => 'Detail Show Image'
        ];

        $activeMenu = 'uploadGambar';

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

        return view('hasilUp-gambar', [
            'originalFileName' => $originalFileName,
            'fileName' => $fileName,
            'fileSize' => $fileSize,
            'extension' => $extension,
            'uploadTime' => $uploadTime,
            'filePath' => $filePath,
            'breadcrumb' => $breadcrumb,
            'page' => $page,
            'activeMenu' => $activeMenu
        ]);
    }
}