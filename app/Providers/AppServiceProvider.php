<?php

namespace App\Providers;
use App\Models\MediaContent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        //
        View::composer('components.layouts.app', function ($view) {
            $logos = MediaContent::where('type', 'logo')->first();
            if ($logos) {
                $url = $logos->getImageUrl();
                if ($url) {
                    $logos->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
                } else {
                    $logos->imageUrl = null;
                }
            }
            
            $view->with('logos', $logos);
        });
    }
}
