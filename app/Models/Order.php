<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $primaryKey = 'OrdID';
    protected $fillable = [
        'OrdID',
        'CusID',
        'ReceivingName',
        'OrderDate',
        'Status',
        'ReceivingAddress',
        'ReceivingPhone',
        'MoneyTotal',
        'Note',
        'ReceivingEmail',
        'Payment',
        'created_at',
        'updated_at',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CusID', 'CusID');
    }
}
