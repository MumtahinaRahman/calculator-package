<?php

namespace Mumtahina\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //register our controller 
        $this -> app -> make('Mumtahina\Calculator\CalculatorController');
        $this -> loadViewsFrom(__DIR__.'/view', 'calculator');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        include __DIR__.'/routes.php';
    }
}
