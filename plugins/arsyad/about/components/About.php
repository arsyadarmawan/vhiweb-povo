<?php namespace Arsyad\About\Components;

use Cms\Classes\ComponentBase;
use Arsyad\About\Models\About as AboutModels;
class About extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'About Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getOne(){
        return AboutModels::paginate(1);
    }
}
