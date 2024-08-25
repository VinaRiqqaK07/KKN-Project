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
            //dd($logos);
            $url = $logos->getImageUrl();
            if ($url) {
                $logos->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            } else {
                $logos->imageUrl = null;
            }
            // $logos->each(function ($logo) {
            //     $url = $logo->getImageUrl();
            //     //dd($url);
            //     if ($url) {
            //         $logo->imageUrl = Str::replaceFirst(config('app.url') . '/storage', 'storage', $url);
            //     } else {
            //         $logo->imageUrl = null;
            //     }
            //     //dd($logo);
                
            // });
            // dd($logos);
            // $logos->each(function ($logo) {
            //     dd($logo->imageUrl);
            // });
            //dd($logos->imageUrl);
            //dd(count($logos));
            $view->with('logos', $logos);
        });
    }
}
