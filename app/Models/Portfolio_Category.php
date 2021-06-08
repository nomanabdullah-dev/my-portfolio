<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_Category extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->hasMany('App\Models\Portfolio_Project');
    }
}
