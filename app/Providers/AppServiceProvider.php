<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\StateRepositoryInterface;
use App\Repositories\StateRepository;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\UserRepository;
use App\Repositories\Interfaces\CarRepositoryInterface;
use App\Repositories\CarRepository;
use App\Repositories\Interfaces\ModelRepositoryInterface;
use App\Repositories\ModelRepository;
use App\Repositories\Interfaces\DeliveryRepositoryInterface;
use App\Repositories\DeliveryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StateRepositoryInterface::class, StateRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CarRepositoryInterface::class, CarRepository::class);
        $this->app->bind(ModelRepositoryInterface::class, ModelRepository::class);
        $this->app->bind(DeliveryRepositoryInterface::class, DeliveryRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
