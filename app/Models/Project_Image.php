<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_Image extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo('App\Models\Portfolio_Project');
    }
}
