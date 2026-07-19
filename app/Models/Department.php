<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $fillable = [
        'dep_name',
        'dep_head',
        'total_employees'
    ];

    public function employees(){
        return $this->hashMany(Employee::class);
    }
}
