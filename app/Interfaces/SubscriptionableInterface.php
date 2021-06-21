<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;

interface SubscriptionableInterface
{
    // Relations

    /**
    * Get all of the subscriptions.
    */
    public function subscriptions(): Relation;

    /**
    * Get active subscription.
    */
    public function subscription(): Relation;

    /**
     * Scope to get no expired subscriptions.
     */
    public function notExpired(Builder $query): Builder;

    /**
     * Scope to get expired subscriptions.
     */
    public function expired(Builder $query): Builder;

    /**
    * Get active subscripted plan.
    */
    public function plan(): Relation;


    // Getters

    /**
    * Get active and not expired subscripted plan.
    */
    public function getActiveNotExpiredPlan(): SubscriptionablePlanInterface;


    // Actions

    /**
    * Subscribe to plan.
    * Use this for subscribe to new plan and for expired plan.
    */
    public function subscribePlan(SubscriptionablePlanInterface $plan): bool;

    /**
    * Unsubscribe from plan.
    * Delete subscription.
    */
    public function unsubscribePlan(SubscriptionablePlanInterface $plan): bool;

    /**
    * Change plan if they subscribed.
    * Set active plan.
    */
    public function switchToPlan(SubscriptionablePlanInterface $plan): bool;


    // Checkers

    /**
    * Check if user has expired subscriptions.
    */
    public function hasExpiredSubscriptions(): bool;

    /**
    * Check if user can create client on active subscribed plan.
    */
    public function canCreateClient(): bool;

    /**
    * Check if active subscription is expired.
    */
    public function activeSubscriptionIsExpired(): bool;
}
