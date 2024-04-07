<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'CatID';
    protected $fillable = [
        'CatID',
        'CatName',
        'MetaTitle',
        'Stuffs',
        'RootID',
        'DisplayOrder',
        'created_at',
        'CreateBy',
        'ModifiedDate',
        'MetaDescriptions',
        'Status',
        'ShowMenu',
        'updated_at',
        'CatIMG'
    ];
}