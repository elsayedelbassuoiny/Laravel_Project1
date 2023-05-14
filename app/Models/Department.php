<?php

namespace App\Models;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'code'
    ];

    // public function subjects()
    // {
    //     return $this->hasMany(Subject::class);
    // }

}
