<?php

namespace App\Services;

use App\Interfaces\SubscriptionableInterface;
use App\Interfaces\SubscriptionablePlanInterface;
use App\Interfaces\SubscriptionServiceInterface;
use App\Models\Plan;
use Illuminate\Support\Collection;

class SubscriptionService implements SubscriptionServiceInterface
{
    /**
    * Get list of available plans for subscribe.
    */
    public function getAvailablePlans(): Collection
    {
        // TODO

        return Plan::all();
    }

    /**
    * Change user to plan.
    */
    public function changeUserPlan(
        SubscriptionableInterface $user,
        SubscriptionablePlanInterface $plan
    ): bool
    {
        // TODO

        return $user->switchToPlan($plan);
    }

    /**
    * Subscribe user to plan.
    */
    public function subscribeUserToPlan(
        SubscriptionableInterface $user,
        SubscriptionablePlanInterface $plan
    ): bool
    {
        // TODO

        return $user->subscribePlan($plan);
    }

    /**
    * Subscribe user to plan.
    */
    public function canUserAddClient(SubscriptionableInterface $user): bool
    {
        // TODO

        return $user->canCreateClient();
    }

    /**
    * Get all expired subscriptions.
    */
    public function getExpiredSubscriptions(
        SubscriptionableInterface $user
    ): Collection
    {
        // TODO

        return $user->subscriptions()->expired()->get();
    }
}
