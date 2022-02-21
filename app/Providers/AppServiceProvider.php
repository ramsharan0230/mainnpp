<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repo\GalleryInterface', 'App\Repo\Eloquent\GalleryRepo');
        $this->app->bind('App\Repo\NewsEventInterface', 'App\Repo\Eloquent\NewsEventRepo');
        $this->app->bind('App\Repo\MemberInterface', 'App\Repo\Eloquent\MemberRepo');
        $this->app->bind('App\Repo\PressReleaseInterface', 'App\Repo\Eloquent\PressReleaseRepo');
        $this->app->bind('App\Repo\OnlineLibraryInterface', 'App\Repo\Eloquent\OnlineLibraryRepo');
        $this->app->bind('App\Repo\HistoryInterface', 'App\Repo\Eloquent\HistoryRepo');
        $this->app->bind('App\Repo\HistoryImageInterface', 'App\Repo\Eloquent\HistoryImageRepo');
        $this->app->bind('App\Repo\OfficeInterface', 'App\Repo\Eloquent\OfficeRepo');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
