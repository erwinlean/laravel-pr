<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $timesamp = false;

    protected $fillable = ['id', 'cat_nom', 'cat_obs'];
}
