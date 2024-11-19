<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $table = 'notices';

    protected $fillable = [
        'commune_id',
        'category_id',
        'user_id',
        'title',
        'description',
        'price',
        'status',
        'highlighted_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
    public function highlighted()
    {
        return $this->belongsTo(Highlighted::class);
    }
    public function highlightedNotices()
    {
        return $this->hasMany(HighlightedNotice::class);
    }

    public function commune()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }
}
