@extends('layouts.master') {{-- Giả sử em dùng file layout tên master --}}

@section('title', 'Kết quả tìm kiếm')

@section('content')
    <div class="content">
        <h2>KẾT QUẢ TÌM KIẾM</h2>

        @if(count($ketQua) > 0)
            @foreach($ketQua as $tin)
                <div class="tin-item">
                    <h3><a href="{{ route('tin-chi-tiet', $tin->id) }}">{{ $tin->tieu_de }}</a></h3>
                    <p><small>{{ $tin->created_at->format('d-m-Y H:i') }}</small></p>
                    <p>{{ Str::limit(strip_tags($tin->noi_dung), 200) }}</p>
                </div>
                <hr>
            @endforeach

            {{-- Phân trang nếu có --}}
            <div class="pagination">
                {{ $ketQua->links() }}
            </div>
        @else
            <p>Không tìm thấy kết quả phù hợp.</p>
        @endif
    </div>
@endsection
