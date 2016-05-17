<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $settings = Setting::all();
      $setting = [];
      foreach ($settings as $key) {
        $setting[$key->key] = $key->value;
      }
      view()->share('setting', $setting);
      // dd($setting);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
