<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Importbill extends Model
{
    protected $table = 'importbill'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'ImpID';
    // Các cột được phép gán giá trị
    protected $fillable = [
        'SupID',
        'MaHDN',
        'NguoiNhap',
        'ImpDate',
        'MoneyTotal',
        'Note',
        'ProID',
        'Quantity',
        'ImpPrice'
    ];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'SupID', 'SupID');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'ProID', 'ProID');
    }
    public $timestamps = false;
}
