<?php namespace NITH\Conference\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Conferences Back-end Controller
 */
class Conferences extends Controller
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

        BackendMenu::setContext('NITH.People', 'people', 'conferences');
    }
}