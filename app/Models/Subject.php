<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Subject extends Model
{

    const SUCCESS_DEGREE = 50;

    protected $fillable = [
        'department_id',
        'name',
        'code',
        'pre_requisite'
    ];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    public function department() {
        // return $this->belongsTo('App/Models/Department');
        return $this->belongsTo(Department::class);
    }

}
