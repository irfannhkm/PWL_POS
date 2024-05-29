@extends('layoutss.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Upload Successful!</h4>
                <p>Your image has been uploaded successfully.</p>
                <hr>
                <p class="mb-0">You can view your image below along with the upload details.</p>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Image Preview <i class="fas fa-image"></i></h5>
                    <img src="{{ $filePath }}" class="img-fluid rounded" alt="{{ $fileName }}"
                        style="max-width: 100%; height: auto;">
                    <p class="mt-3">
                        <a href="{{ $filePath }}" class="btn btn-primary" target="_blank"><i class="fas fa-eye"></i>
                            View Full Image</a>
                    </p>
                </div>
            </div>
            <div class="mt-4">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Original File Name:</strong> {{ $originalFileName }}</li>
                    <li class="list-group-item"><strong>New File Name:</strong> {{ $fileName }}</li>
                    <li class="list-group-item"><strong>File Extension:</strong> {{ $extension }}</li>
                    <li class="list-group-item"><strong>Upload Time:</strong> {{ $uploadTime }}</li>
                    <li class="list-group-item"><strong>File Size:</strong> {{ number_format($fileSize / 1024, 2) }} KB</li>
                    <li class="list-group-item"><strong>File Path:</strong> <a href="{{ $filePath }}"
                            target="_blank">{{ $filePath }}</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
