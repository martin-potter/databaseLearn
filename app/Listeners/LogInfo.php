<?php

namespace App\Listeners;

use App\Events\PurchaseSaved;
use Illuminate\Events\Dispatcher;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogInfo
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function purchaseSaved($event)
    {
        dd($event);
    }

    public function subscribe(Dispatcher $event)
    {
        $event->listen(
            PurchaseSaved::class,
            self::class.'@purchaseSaved'
        );
    }
}
