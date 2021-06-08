<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio_Project extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Portfolio_Category');
    }

    public function photos()
    {
        return $this->hasMany('App\Models\Project_Image','project_id');
    }
}
