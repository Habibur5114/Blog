<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cover extends Model
{
    protected $table="covers";
    protected $fillable = [
        'image',
        'title',
        'description'
        
        
    ];
}