<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_name',
        'structure_id',
    ];

    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }
}
