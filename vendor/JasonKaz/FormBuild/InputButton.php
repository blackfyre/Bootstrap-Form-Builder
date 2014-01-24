<?php
/**
 * Created by PhpStorm.
 * User: Galicz Miklós
 * Date: 2014.01.24.
 * Time: 10:32
 */

namespace JasonKaz\FormBuild;

/**
 * Class InputButton
 * @package JasonKaz\FormBuild
 */
class InputButton extends FormElement
{

    /**
     * @param string $Label
     * @param array $Attribs
     * @return \JasonKaz\FormBuild\InputButton
     */
    function __construct($Label = 'Button', $Attribs = array())
    {

        $this->Attribs = $Attribs;
        $this->setAttributeDefaults(array('class' => 'btn'));

        $this->Code = '<button';
        $this->Code .= $this->parseAttribs($this->Attribs);
        $this->Code .= ' > ' . $Label . '</button>';
    }
}