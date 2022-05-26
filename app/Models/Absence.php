<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function student()
    {
        return Student::where('admissionNumber',$this->getAttribute('admissionNo'))->first();
    }
}
