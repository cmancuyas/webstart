<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Customer;

class Company extends Model
{
    protected $fillable = [
        'name'
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
