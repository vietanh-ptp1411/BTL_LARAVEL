<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $primaryKey = 'SupID';
    protected $fillable = [
        'SupID',
        'SupName',
        'SupAddress',
        'SupEmail',
        'SupPhone',
        'Status'
    ];
    public function importbill()
    {
        return $this->belongsTo(Importbill::class, 'SupID', 'SupID');
    }
    public $timestamps = false;
}
