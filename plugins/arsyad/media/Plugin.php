<?php namespace Arsyad\Media;

use Backend;
use System\Classes\PluginBase;

/**
 * Media Plugin Information File
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
            'name'        => 'Media',
            'description' => 'povo media wuzz here',
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
        return [
            'Arsyad\Media\Components\Media' => 'mediaPost'
        ];
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
            'Arsyad\Media\Components\Media' => 'Media',
        ];
        // return [
        //     'Barisannasionalis\Contact\Components\Contact' => 'Contact',
        // ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'arsyad.media.some_permission' => [
                'tab' => 'Media',
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
            'media' => [
                'label'       => 'Povo',
                'url'         => Backend::url('arsyad/media/medias'),
                'icon'        => 'icon-pencil',
                'permissions' => ['arsyad.media.*'],
                'order'       => 500,
                'sideMenu' => [
                    'medias' => [
                        'label'       => 'Media',
                        'url'         =>Backend::url('arsyad/media/medias'),
                        'icon'        => 'icon-image',
                        'permissions' => ['arsyad.media.*'],
                        'order'       => 500,
                    ]
                ]
            ],
        ];
    }
}
