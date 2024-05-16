<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use database\seeders\DatabaseSeeder;

class Roles extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'guard_name'
    ];
    protected $primaryKey = 'id';
    protected $table = 'roles';

    public function admin(){
        return $this->belongsToMany('App\Models\Admin\AdminModel');
    }
}