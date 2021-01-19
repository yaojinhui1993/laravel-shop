<?php

namespace App\Providers;

use App\Events\OrderPaid;
use App\Events\OrderReviewed;
use App\Listeners\SendOrderPaidMail;
use Illuminate\Support\Facades\Event;
use App\Listeners\UpdateProductRating;
use App\Listeners\UpdateProductSoldCount;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        OrderPaid::class => [
            UpdateProductSoldCount::class,
            SendOrderPaidMail::class,
        ],
        OrderReviewed::class => [
            UpdateProductRating::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
