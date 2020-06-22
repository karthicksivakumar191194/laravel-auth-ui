<?php

namespace LaraSnap\LaravelAuthUI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand;
use Laravel\Ui\AuthCommand;

class LaravelAuthUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        UiCommand::macro('larasnap-auth-ui', function ($command) {
            LaraSnapPreset::install();
            
            $command->info('LaraSnap Auth UI installed successfully.');
        });
    }

    public function register()
    {
        //
    }
}