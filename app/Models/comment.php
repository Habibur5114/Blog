<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commant extends Model
{
    protected $table="comments";
    protected $fillable = [
        'name',
        'email',
        'subject',
        'comment',
        
    ];
}
