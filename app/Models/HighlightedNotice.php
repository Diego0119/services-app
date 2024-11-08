<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighlightedNotice extends Model
{
    use HasFactory;
    protected $table = 'highlighted_notice';

    protected $fillable = [
        'highlighted_id',
        'notice_id',
        'start_date',
        'end_date',
        'amount_paid'
    ];

    public function notice()
    {
        return $this->belongsTo(Notice::class);
    }

}
