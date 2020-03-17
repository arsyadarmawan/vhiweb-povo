<?php namespace Arsyad\About;

use Backend;
use System\Classes\PluginBase;

/**
 * About Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'About',
            'description' => 'No description provided yet...',
            'author'      => 'Arsyad',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Arsyad\About\Components\About' => 'About',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'arsyad.about.some_permission' => [
                'tab' => 'About',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'about' => [
                'label'       => 'About',
                'url'         => Backend::url('arsyad/about/abouts'),
                'icon'        => 'icon-address-book',
                'permissions' => ['arsyad.about.*'],
                'order'       => 500,
            ],
        ];
    }
}
