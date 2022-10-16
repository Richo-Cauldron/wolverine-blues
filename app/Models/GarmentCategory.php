<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Laravel\Scout\Searchable;

class GarmentCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = array('name');
}
