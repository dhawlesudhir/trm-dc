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
            if ($user->user_type == "A") {
                return true;
            }
        });

        Gate::define('get-all-users', function () {
            return false;
        });

        Gate::define('user-management', function () {
            return false;
        });

        Gate::define('get-all-retailers', function (User $user) {
            return in_array($user->user_type, ['A', 'D', 'R']);
        });

        Gate::define('update-profile', function (User $user, User $profile) {
            return $user->login_id == $profile->login_id;
        });

        // Gate::define('get-all-retailers', [UserController::class, 'retailers']);
    }
}
