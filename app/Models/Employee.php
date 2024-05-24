<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'EmpID';
    // Các cột được phép gán giá trị
    protected $fillable = [
        'EmpID',
        'EmpName',
        'Brithday',
        'EmpPhone',
        'EmpEmail',
        'EmpAddress',
        'Password',
    ];
    public $timestamps = false;
}
