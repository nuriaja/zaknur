<?php

namespace App\Providers;

use App\Models\User;
use illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        Gate::define('admin', function (User $user) {
            return $user->roles_id == 2;
        });

        Gate::define('guru', function (User $user) {
            return $user->roles_id == 1;
        });

        Gate::define('siswa', function (User $user) {
            return $user->roles_id == 3;
        });
    }
}
