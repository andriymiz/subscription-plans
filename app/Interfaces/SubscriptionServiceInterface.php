<?php

namespace App\Interfaces;

use Illuminate\Support\Collection;

interface SubscriptionServiceInterface
{
    /**
    * Get list of available plans for subscribe.
    */
    public function getAvailablePlans(): Collection;

    // Actions with User

    /**
    * Change user to plan.
    */
    public function changeUserPlan(
        SubscriptionableInterface $user,
        SubscriptionablePlanInterface $plan
    ): bool;

    /**
    * Subscribe user to plan.
    */
    public function subscribeUserToPlan(
        SubscriptionableInterface $user,
        SubscriptionablePlanInterface $plan
    ): bool;

    /**
    * Check if user can add client on active plan.
    */
    public function canUserAddClient(SubscriptionableInterface $user): bool;

    /**
    * Get all expired subscriptions.
    */
    public function getExpiredSubscriptions(
        SubscriptionableInterface $user
    ): Collection;
}
