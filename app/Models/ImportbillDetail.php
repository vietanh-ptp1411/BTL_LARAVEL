<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImportbillDetail extends Model
{
    protected $table = 'importbilldetail'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'ImpdtID';
    // Các cột được phép gán giá trị
    protected $fillable = [
        'ImpdtID',
        'ImpID',
        'ProID',
        'Quantity',
        'ImpPrice',
    ];
}
