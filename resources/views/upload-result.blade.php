<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Upload Successful!</h4>
            <p>Gambar Anda telah berhasil diunggah.</p>
            <hr>
            <p class="mb-0">Anda dapat melihat gambar Anda di bawah beserta detail unggahannya.</p>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title">Preview Gambar</h5>
                <img src="{{ $filePath }}" class="img-fluid rounded" alt="{{ $fileName }}" style="max-width: 100%; height: auto;">
                <p class="mt-3">
                    <a href="{{ $filePath }}" class="btn btn-primary" target="_blank">View Full Image</a>
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
                <li class="list-group-item"><strong>File Path:</strong> <a href="{{ $filePath }}" target="_blank">{{ $filePath }}</a></li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
