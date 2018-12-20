<?php

namespace App\Providers;

use App\Auth\ObreiroProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        \Auth::provider('obreiro-user', function($app, array $config){
//            return new ObreiroProvider($app['hash'], $config['model']);
            return new ObreiroProvider($app['hash'], $config['model']);
        });
    }
}
