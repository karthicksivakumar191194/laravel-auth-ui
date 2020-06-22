<?php

namespace LaraSnap\LaravelAuthUI;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class LaraSnapPreset extends Preset
{
    const STUBSPATH = __DIR__.'/larasnap-stubs/';

    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {    
        static::updateAssets();  
        static::updateAuthLayoutViews();        
        static::updateWelcomePage();        
        static::updateHomePage();        
        static::updateAuthViews();       
    }
    
    /**
     * Update the assets
     *
     * @return void
     */
    protected static function updateAssets()
    {
        static::copyDirectory('assets', public_path('vendor/larasnap-auth'));
    }

    /**
     * Update the default layout files
     *
     * @return void
     */
    protected static function updateAuthLayoutViews()
    {
        // copy new one from your stubs folder
        static::copyDirectory('resources/views/layouts', resource_path('views/layouts'));
    }
    
    /**
     * Update the default welcome page file.
     *
     * @return void
     */
    protected static function updateWelcomePage()
    {
        // remove default welcome page
        static::deleteResource(('views/welcome.blade.php'));

        // copy new one from your stubs folder
        static::copyFile('resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    /**
     * Update the default home page file.
     *
     * @return void
     */
    protected static function updateHomePage()
    {
        // remove default home page
        static::deleteResource(('views/home.blade.php'));

        // copy new one from your stubs folder
        static::copyFile('resources/views/home.blade.php', resource_path('views/home.blade.php'));
    }
    
    /**
     * Copy Auth view templates.
     *
     * @return void
     */
    protected static function updateAuthViews()
    {       
        static::copyDirectory('resources/views/auth', resource_path('views/auth'));
    }   
        
    /**
     * Delete a resource
     *
     * @param string $resource
     * @return void
     */
    private static function deleteResource($resource)
    {
        (new Filesystem)->delete(resource_path($resource));
    }

    /**
     * Copy a file
     *
     * @param string $file
     * @param string $destination
     * @return void
     */
    private static function copyFile($file, $destination)
    {
        (new Filesystem)->copy(static::STUBSPATH.$file, $destination);
    }

    /**
     * Copy a directory
     *
     * @param string $directory
     * @param string $destination
     * @return void
     */
    private static function copyDirectory($directory, $destination)
    {
        (new Filesystem)->copyDirectory(static::STUBSPATH.$directory, $destination);
    }
}