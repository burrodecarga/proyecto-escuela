<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super-admin') ? true : null;
        });

        Blade::if('canRole', function (string $value) {
            $permissions = auth()->user()->getPermissionsViaRoles()->pluck('name')->toArray();
            //dd($value,$permissions);
            return in_array($value . '.index', $permissions);
        });


        Blade::if('canRoles', function (array $values) {
            $permissions = auth()->user()->getPermissionsViaRoles()->pluck('name')->toArray();
            $can = false;
            foreach ($values as $value) {
                $can = in_array($value . '.index', $permissions);
                if ($can == true)
                    break;
            }
            return $can;
        });


    }
}
