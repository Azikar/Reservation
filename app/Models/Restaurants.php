<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Restaurants extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id',
        'name',
        'max_people',
    ];

    public function tables(): HasMany
    {
        return $this->hasMany(Tables::class, 'restaurant_id');
    }
}
