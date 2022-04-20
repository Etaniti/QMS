<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function organization()
    {
        return $this->hasOne(Organization::class);
    }
}
