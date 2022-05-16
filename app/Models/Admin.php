<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Personne
{
    use HasFactory;
    protected $guarded=[];

    public function personne()
    {
        return $this->morphOne('App\Models\Personne','role');
    }
}
