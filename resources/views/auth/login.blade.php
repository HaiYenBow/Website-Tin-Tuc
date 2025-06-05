<h2>Đăng nhập</h2>

@if(session('error'))
    <div style="color:red">{{ session('error') }}</div>
@endif

<form method="POST" action="{{ route('xu-ly-dang-nhap') }}">
    @csrf
    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Mật khẩu:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Đăng nhập</button>
</form>
