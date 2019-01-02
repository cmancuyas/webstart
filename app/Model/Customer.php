<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Company;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name', 'email', 'phone', 'address', 'company_id'
    ];

    public function company(){
        return $this->hasOne(Company::class, 'id', 'company_id');
    }
}
