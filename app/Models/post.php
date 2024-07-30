<?php

namespace App\Models;
use App\models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table="posts";
    protected $fillable = [
        'category_id',
        'image',
        'title',
        'description'
        
    ];
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
}
