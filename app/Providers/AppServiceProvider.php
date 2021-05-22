<?php

namespace App\Providers;

use App\View\Components\Alert;
use App\View\Components\Forms\FormInput;
use App\View\Components\Forms\FormSelect;
use Illuminate\Support\Facades\Blade;
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
        //
        Blade::component(FormInput::class, 'input');
        Blade::component(FormSelect::class, 'select');
        Blade::component(Alert::class, 'alert');
    }
}

