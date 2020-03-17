<?php namespace Arsyad\About\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Abouts Back-end Controller
 */
class Abouts extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Arsyad.About', 'about', 'abouts');
    }
}
