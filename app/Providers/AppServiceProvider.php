<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Students;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

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
        //
        JsonResource::withoutWrapping(); // This command removes "data" key from all classes extended from "JsonResource"
        ResourceCollection::withoutWrapping();

        //Students::withoutWrapping();
    }
}
