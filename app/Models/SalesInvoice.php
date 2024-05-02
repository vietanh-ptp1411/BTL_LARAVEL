<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesInvoice extends Model
{
    protected $table = 'salesinvoice'; // Tên bảng trong cơ sở dữ liệu

    protected $primaryKey = 'SalID';
    // Các cột được phép gán giá trị
    protected $fillable = ['SalID',
                            'CusID',
                            'SalName',
                            'SalDate',
                            'MoneyTotal',
                            'Note'];

    public function customer()
    {
        return $this->belongsTo(customer::class, 'CusID', 'CusID');
    }
}
