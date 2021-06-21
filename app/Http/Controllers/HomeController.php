<?php

namespace App\Http\Controllers;

use App\Interfaces\SubscriptionServiceInterface;
use App\Models\Plan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $subscriptionService;

    public function __construct(SubscriptionServiceInterface $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }

    /**
     * Display a listing of the resource.
     * Example of getting available plans
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = $this->subscriptionService->getAvailablePlans();

        return response($plans);
    }

    /**
     * Display a listing of the resource.
     * Example of subscribe to plan
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request, Plan $plan)
    {
        $this->subscriptionService->subscribeUserToPlan(
            $request->user(),
            $plan
        );

        return response($plan);
    }
}
