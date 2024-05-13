<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Importbill extends Model
{
    protected $table = 'importbill'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'ImpID';
    // Các cột được phép gán giá trị
    protected $fillable = [
                            'ImpID',
                            'EmpID',
                            'SupID',
                            'ImpDate',
                            'MoneyTotal',
                            'Note',
                            ];

}
