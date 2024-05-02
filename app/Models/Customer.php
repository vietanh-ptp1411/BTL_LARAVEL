<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'CusID';
    protected $fillable = [
        'CusID',
        'CusName',
        'CusAddress',
        'Brithday',
        'CusPhone',
        'CusEmail',
        'UserName',
        'Password',
        'updated_at',
        'created_at'
    ];
    public function saleinvoice()
    {
        return $this->hasOne(SalesInvoice::class, 'CusID', 'CusID');
    }
}
