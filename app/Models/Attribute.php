<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $table = 'attributes';

    protected $fillable = [
        'category_id',
        'name',
        'type',
    ];

    public function categorie()
    {
        return $this->belongsToMany(Category::class, 'category_attributes');
    }

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
