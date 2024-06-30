<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'orderdetail';
    protected $primaryKey = 'OrdtID';
    protected $fillable = [
        'OrdtID',
        'OrdID',
        'ProID',
        'Quantity',
        'Price',
    ];
    public function Order()
    {
        return $this->belongsTo(Order::class, 'OrdID', 'OrdID');
    }
}
