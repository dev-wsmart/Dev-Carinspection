<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_inspection_custo extends Model
{
    //
    protected $fillable = [
        'ins','nametitle', 'firstname','lastname', 'address',
        'province', 'district','subdistrict', 'postalcode',
        'idcard', 'tel','customertype','contact','tel_contact'
    ];
}
