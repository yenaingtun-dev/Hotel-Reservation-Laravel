<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('update-reservation', function (User $user) {
            if ($user->role === 'super_admin' || $user->role === 'hotel_manager') {
                return true;
            }
        });
        Gate::define('delete-reservation', function (User $user) {
            if ($user->role === 'super_admin') {
                return true;
            }
        });
    }
}
