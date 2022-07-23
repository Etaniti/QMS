<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'structure_id',
        'post_1',
        'post_2',
        'post_3',
        'post_4',
        'post_5',
        'post_6',
        'post_7',
        'post_8',
        'post_9',
        'post_10',
    ];

    public function structure()
    {
        return $this->belongsTo(Structure::class);
    }
}
