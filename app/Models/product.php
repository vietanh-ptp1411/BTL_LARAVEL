<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'ProID';
    // Các cột được phép gán giá trị
    protected $fillable = ['ProID', 'CatID', 'ProName', 'ProDescription', 'ProImage', 'MoreImage','Materials','Size'];

    // Các mối quan hệ với các mô hình khác
    public function price()
    {
        return $this->hasOne(Price::class, 'ProID', 'ProID');
    }
}
