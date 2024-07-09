<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    public $timestamps = false;

    protected $fillable = [
        'file_name',
        'file_path',
        'id_customer',
    ];

    protected $hidden = [
        'id',
    ];
}
