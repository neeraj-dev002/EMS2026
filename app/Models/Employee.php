<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'department_id',
        'position',
        'joining_date',
        'status',
        'address',
        'salary'
    ];

public function department()
{
    return $this->belongsTo(Department::class);
}
}
