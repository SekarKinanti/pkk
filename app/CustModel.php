<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustModel extends Model
{
    protected $table="customer";
    protected $primarykey="id_cust";
    public $timestamps=false;

    protected $fillable = [
        'nama_customer',
        'alamat',
        'telp'

    ];
}
