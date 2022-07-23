<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_id',
    ];

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
