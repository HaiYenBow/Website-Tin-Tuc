<h2>Kết quả tìm kiếm cho: "{{ $tuKhoa }}"</h2>

@if($ketQua->count() > 0)
    <ul>
        @foreach($ketQua as $tin)
            <li><a href="#">{{ $tin->tieu_de }}</a></li>
        @endforeach
    </ul>
@else
    <p>Không tìm thấy kết quả nào.</p>
@endif
