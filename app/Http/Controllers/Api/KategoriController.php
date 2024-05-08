<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class KategoriController extends Controller
{
    public function index()
    {
        return KategoriModel::all();
    }
    public function store(Request $request)
    {
        $kategori_id = KategoriModel::create($request->all());
        return response()->json($kategori_id, 201);
    }
    public function show($id)
    {
        $kategori_id = KategoriModel::find($id);
        return response()->json($kategori_id, 200);
    }
    public function update(Request $request, $id)
    {
        $kategori_id = KategoriModel::find($id);
        $kategori_id->update($request->all());
        return response()->json($kategori_id, 200);
    }
    public function destroy($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();
        return response()->json([
            'success' => true,
            'message' => 'Kategori Berhasil dihapus!'
        ]);
    }
}
