<?php

namespace App\Providers;

<<<<<<< Updated upstream
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
=======
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
>>>>>>> Stashed changes

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
