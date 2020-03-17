<?php namespace Arsyad\Media\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Medias Back-end Controller
 */
class Medias extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arsyad.Media', 'media', 'medias');
    }
}
