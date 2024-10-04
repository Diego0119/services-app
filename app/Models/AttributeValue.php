<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    /**
     * Definimos la tabla asociada al modelo.
     */
    protected $table = 'attribute_values';

    /**
     * Los atributos que son asignables en masa.
     */
    protected $fillable = [
        'notice_id',
        'attribute_id',
        'value',
    ];

    /**
     * Relación con el modelo Notice.
     * Un valor de atributo pertenece a un anuncio.
     */
    public function notice()
    {
        return $this->belongsTo(Notice::class);
    }

    /**
     * Relación con el modelo Attribute.
     * Un valor de atributo pertenece a un atributo específico.
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
