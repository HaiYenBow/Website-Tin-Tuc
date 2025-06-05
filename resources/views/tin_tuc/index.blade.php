<!DOCTYPE html> 
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Tin Tức</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .menu { background-color: #4d7c0f; color: white; }
        .menu a { color: white; margin-right: 20px; text-decoration: none; font-weight: bold; }
        .sidebar-title { background-color: #4d7c0f; color: white; padding: 5px 10px; margin-bottom: 10px; }
        .card-title:hover { color: #2563eb; cursor: pointer; }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .card {
            border-radius: 5px;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <!-- Top bar -->
    <div class="bg-light px-3 py-2 d-flex justify-content-between align-items-center border-bottom">
        <div>
            Thứ Bảy ngày {{ now()->format('d') }} tháng {{ now()->format('m') }} năm {{ now()->format('Y') }} {{ now()->format('H:i:s') }}
        </div>
        <div class="d-flex align-items-center">
            <a href="{{ route('dang-nhap') }}" class="me-3">Đăng nhập</a>
            <form action="{{ route('tim-kiem') }}" method="GET" class="d-flex">
                <input type="text" name="tu_khoa" class="form-control form-control-sm me-2" placeholder="Tìm kiếm...">
                <button class="btn btn-sm btn-success">🔍</button>
            </form>
        </div>
    </div>

    <div class="container mt-3">
        <!-- Logo và menu -->
        <h1 class="text-danger">NEWS</h1>
        <div class="menu p-2 mb-4 d-flex justify-content-between align-items-center">
            <div>
                <a href="#">Trang chủ</a>
                <a href="#">Giới thiệu</a>
                <a href="#">Tin tức</a>
                <a href="#">Chia sẻ</a>
                <a href="#">Quan điểm</a>
                <a href="#">Liên hệ</a>
            </div>
            <form action="{{ route('tim-kiem') }}" method="GET" class="d-flex mb-0">
                <input type="text" name="tu_khoa" class="form-control form-control-sm me-2" placeholder="Tìm kiếm...">
                <button class="btn btn-sm btn-light text-success">🔍</button>
            </form>
        </div>

        <div class="row">
            <!-- Bài viết nổi bật đầu trang -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <img src="{{ asset('ảnh/151910462_ky-nang-tim-kiem-viec-lam-2.png') }}" alt="Ảnh bài viết nổi bật" class="img-fluid rounded">
                </div>
                <div class="col-md-5">
                    <h5 class="text-dark fw-bold">5 lý do bạn không nên làm cho công ty khởi nghiệp</h5>
                    <p class="text-muted" style="font-size: 14px;">05-10-2016 14:04:19</p>
                    <p style="font-size: 15px;">Qua một thời gian dài lềnh đềnh tìm việc làm, Trương Đình Nam tôi có chút kinh nghiệm xin việc và kinh nghiệm khởi nghiệp...</p>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-success">5 lý do bạn không nên làm cho công ty khởi nghiệp</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-success">Chiến lược bán hàng không cần quảng cáo</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-success">Tôi đã kiếm được 100$ đầu tiên từ Youtube như thế nào</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-success">Làm giàu trên Internet, tại sao không?</a></li>
                        <li><a href="#" class="text-decoration-none text-success">Tạo blog để kiếm tiền, bạn đã biết chưa?</a></li>
                    </ul>
                </div>
            </div>

            <!-- Tin nóng -->
            <div class="col-md-8">
                <div class="sidebar-title">TIN NÓNG</div>
                <div class="row">
                    @for ($i = 1; $i <= 2; $i++)
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 shadow-sm">
                                <img src="{{ asset('ảnh/7-6.jpg') }}" alt="Ảnh bài viết" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $i }}. Việt Nam tăng 14% lượng người dùng Internet di động</h5>
                                    <p class="card-text"><small class="text-muted">{{ now()->subDays($i)->format('d-m-Y H:i') }}</small></p>
                                    <p class="card-text">Việt Nam đạt 104,7 triệu thuê bao Internet băng rộng di động tính đến tháng 4, tăng 14,4% so với cùng kỳ năm trước...</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="sidebar-title">TIN MỚI</div>
                <ul class="list-group mb-3">
                    <li class="list-group-item">Chiến lược bán hàng không cần quảng cáo</li>
                    <li class="list-group-item">Tôi đã kiếm được 100$ từ Youtube như thế nào</li>
                    <li class="list-group-item">Tạo blog để kiếm tiền, bạn đã biết chưa?</li>
                    <li class="list-group-item">Khởi nghiệp thời đại số</li>
                    <li class="list-group-item">Bí quyết học nhanh lập trình web</li>
                </ul>

                <div class="sidebar-title">CHUYÊN MỤC</div>
                <ul class="list-group">
                    <li class="list-group-item">Tin tức</li>
                    <li class="list-group-item">Công nghệ</li>
                    <li class="list-group-item">Khởi nghiệp</li>
                    <li class="list-group-item">Quan điểm</li>
                    <li class="list-group-item">Chia sẻ kỹ năng</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
