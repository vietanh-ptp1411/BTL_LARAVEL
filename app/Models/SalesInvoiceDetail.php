<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesInvoiceDetail extends Model
{
    use HasFactory;
    protected $table = 'salesinvoicedetail';
    protected $primaryKey = 'SaldtID';
    protected $fillable = [
                            'SaldtID',
                            'SalID',
                            'ProID',
                            'Quantity',
                            'Price'
                            ];
}

