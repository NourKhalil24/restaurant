<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dish extends Model
{
    use HasFactory;
    protected $fillable=['name',
                        'price',
                        'date',
                        'chief',
                        'size',
                        'type',
                        'photo'];

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
