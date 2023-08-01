<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Agent extends Model
{
    use HasFactory;
    protected $fillable=['first_name',
                         'second_name',
                         'email',
                         'password',
                         'phone_number_one',
                         'phone_number_two',
                         'gender',
                         'birthday',
                         'identify_number'];

    public function dish(): HasOne
    {
        return $this->hasOne(Dish::class);
    }
}
