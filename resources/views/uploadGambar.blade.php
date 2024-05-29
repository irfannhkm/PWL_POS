@extends('layoutss.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>
        <div class="card-body">
            <h2 class="mb-4">Upload Your Image</h2>
            <form action="{{ url('/upload-gambar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_gambar" class="form-label">Nama Gambar</label>
                    <input type="text" class="form-control" id="nama_gambar" name="nama_gambar" required>
                    @error('nama_gambar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Pilih Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" required>
                    @error('gambar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                @if ($errors->has('upload_error'))
                    <div class="text-danger">{{ $errors->first('upload_error') }}</div>
                @endif
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
@endsection
