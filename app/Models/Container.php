<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $table = 'container';

    public $timestamps = false;

    protected $fillable = [
        'vessel',
        'voyage',
        'container',
        'Total_Pos',
        'ATA',
    ];

    protected $hidden = [
        'id',
    ];
}
