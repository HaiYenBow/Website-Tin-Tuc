<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiViet;

class BaiVietController extends Controller
{
    public function chiTiet($id)
    {
        $baiViet = BaiViet::findOrFail($id);
        return view('bai_viet.chi-tiet', compact('baiViet'));
    }
}
