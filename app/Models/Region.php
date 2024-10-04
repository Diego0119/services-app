<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Commune;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';

    protected $fillable = [
        'name'
    ];

    public function commune()
    {
        return $this->hasMany(Commune::class);
    }

}
