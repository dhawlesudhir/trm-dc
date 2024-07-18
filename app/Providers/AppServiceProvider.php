<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Log;

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
            if (in_array($user->service_type, [1])) {
                return true;
            }
        });

        // Gate::define('admin', function (User $user) {
        //     return $user->service_type == 1;
        // });

        Gate::define('get-all-retailers', function (User $user) {
            return in_array($user->service_type, [1, 2, 3]);
        });

        Gate::define('update-profile', function (User $user, User $profile) {
            return $user->login_id == $profile->login_id;
        });
    }
}
