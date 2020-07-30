<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class add_inspection_car extends Model
{
        protected $fillable = [
            'carbrand',
            'carmodel', 'submodel','oldcolor', 'newcolor',
            'year', 'seatnum','place', 'registertype',
            'carregnum', 'mileage','dateregister', 'numowners',
            'cc', 'geartype','engine', 'vin',
            'benzine', 'diesel','hybrid', 'electric',
            'lpg', 'ngv','cng','imported_car', 'carinsurance',
            'expinsurance', 'insurance','tent', 'fromtent',
            'price', 'payment'
        ];
}
