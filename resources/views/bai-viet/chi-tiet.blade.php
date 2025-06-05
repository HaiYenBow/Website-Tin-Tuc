<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>{{ $baiViet->tieu_de }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-danger">{{ $baiViet->tieu_de }}</h1>
        <p class="text-muted">{{ $baiViet->created_at->format('d-m-Y H:i') }}</p>
        <hr>
        <p>{{ $baiViet->noi_dung }}</p>

        <a href="{{ url('/') }}" class="btn btn-secondary mt-3">← Quay lại</a>
    </div>
</body>
</html>
