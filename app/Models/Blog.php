<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'BlogID';
    protected $fillable = [
        'BlogID',
        'Name',
        'MetaTitle',
        'Description',
        'Details',
        'Details1',
        'Details2',
        'Image',
        'MetaDescriptions',
        'MetaDescriptions1',
        'MetaDescriptions2',
        'created_at',
        'updated_at'
    ];
}
