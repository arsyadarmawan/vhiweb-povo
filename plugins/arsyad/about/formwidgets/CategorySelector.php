<?php namespace Arsyad\About\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * CategorySelector Form Widget
 */
class CategorySelector extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'arsyad_about_category_selector';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('categoryselector');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/categoryselector.css', 'Arsyad.About');
        $this->addJs('js/categoryselector.js', 'Arsyad.About');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}
