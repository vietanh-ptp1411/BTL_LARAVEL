<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use database\seeders\DatabaseSeeder;
class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
    public $timestamps = false;

    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'email',
        'password',
        'name',
        'phone'
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Admin\Roles');
    }
    public function getAuthPassword()
    {
        return $this->password;
    }
    public function hasAnyRoles($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    public function hasRole($roles)
    {
        return null !== $this->roles()->where('name', $roles)->first();
    }
}
