<?php

namespace App\Providers;

use App\Models\Author;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Laravel\Cashier\Cashier;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ResourceCollection::withoutWrapping();
    }


}
