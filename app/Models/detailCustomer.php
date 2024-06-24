<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailCustomer extends Model
{
    use HasFactory;

    protected $table = 'detail_customer';

    public $timestamps = false;

    protected $fillable = [
        'id_container',
        'Bill_of_lading',
        'Consignee',
        'Quantity',
        'Volume',
        'date',
        'Report_condition',
        'Status'
    ];

    protected $hidden = [
        'id',
    ];
}
