<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticalModel extends Model
{
    use HasFactory;
    protected $table = 'statistical'; // Tên bảng trong cơ sở dữ liệu
        protected $primaryKey = 'id'; // Tên cột của khóa chính
        public $timestamps = true; // Nếu bảng chứa cột created_at và updated_at(TRUE) và không (FALSE)
    
        protected $fillable = [
            'id',
            'order_date',
            'sales',
            'profit',
            'quantity',
            'total_order'
        ];
}
