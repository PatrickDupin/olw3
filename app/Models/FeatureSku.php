<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, Pivot};

class FeatureSku extends Pivot
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'feature_id',
        'sku_id',
        'value',
    ];

    public function feature(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function sku(): BelongsTo
    {
        return $this->belongsTo(Sku::class);
    }
}
