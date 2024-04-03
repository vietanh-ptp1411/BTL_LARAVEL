<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    protected $table = 'price'; // Tên bảng trong cơ sở dữ liệu

    // Các cột được phép gán giá trị
    protected $fillable = ['ProID', 'Cost'];

    // Các mối quan hệ với các mô hình khác
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProID', 'ProID');
    }
}
