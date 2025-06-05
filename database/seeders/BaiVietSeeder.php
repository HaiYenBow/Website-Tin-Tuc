<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BaiViet;

class BaiVietSeeder extends Seeder
{
    public function run()
    {
        BaiViet::create([
            'tieu_de' => 'Tại sao nên học lập trình web?',
            'noi_dung' => 'Học lập trình web giúp bạn dễ xin việc, dễ freelance, và dễ khởi nghiệp trong thời đại số...',
            'hinh_anh' => null,
            'ngay_dang' => '2025-06-05',
        ]);

        BaiViet::create([
            'tieu_de' => 'Top 5 kỹ năng cần có trong ngành CNTT',
            'noi_dung' => 'Ngoài code giỏi, bạn nên biết giao tiếp, quản lý thời gian, teamwork, học nhanh và giải quyết vấn đề.',
            'hinh_anh' => null,
            'ngay_dang' => '2025-06-04',
        ]);
    }
}
