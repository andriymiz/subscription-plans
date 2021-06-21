<?php

namespace App\Models;

use App\Interfaces\SubscriptionablePlanInterface;
use App\Traits\SubscriptionablePlan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model implements SubscriptionablePlanInterface
{
    use HasFactory, SubscriptionablePlan;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'max_clients',
        'is_available',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'max_clients' => 'integer',
        'is_available' => 'boolean',
    ];
}
