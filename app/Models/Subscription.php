<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'plan_id',
        'expired_at',
        'is_active',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'expired_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    /**
    * Get all of the deployments for the project.
    */
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    /**
    * Get all of the deployments for the project.
    */
    public function user()
    {
        return $this->belongsTo(Plan::class);
    }
}
