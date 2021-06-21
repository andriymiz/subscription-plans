<?php

namespace App\Traits;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

trait SubscriptionableRelations
{
    /**
    * Get all of the subscriptions. Relation.
    */
    public function subscriptions(): Relation
    {
        return $this->hasMany(Subscription::class);
    }

    /**
    * Get active subscription. Relation.
    */
    public function subscription(): Relation
    {
        return $this->hasOne(Subscription::class)
            ->where('is_active', 1);
    }

    /**
     * Scope to get no expired subscriptions.
     */
    public function notExpired(Builder $query): Builder
    {
        return $query->whereNull('expired_at')
            ->orWhere('expired_at', '>', now());
    }

    /**
     * Scope to get expired subscriptions.
     */
    public function expired(Builder $query): Builder
    {
        return $query->where('expired_at', '<', now());
    }

    /**
    * Get all of the subscribed plans.
    */
    public function plans(): Relation
    {
        return $this->hasManyThrough(
            Plan::class,
            Subscription::class,
            'user_id',
            'id',
            'id',
            'plan_id'
        );
    }

    /**
    * Get active subscripted plan.
    */
    public function plan(): Relation
    {
        return $this->hasOneThrough(
            Plan::class,
            Subscription::class,
            'user_id',
            'id',
            'id',
            'plan_id'
        )->where('is_active', 1);
    }
}
