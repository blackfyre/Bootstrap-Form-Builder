<?php
namespace JasonKaz\FormBuild;

/**
 * Class GeneralInput
 *
 * Creates a general input using the following HTML:
 * <input type="[input type]" />
 *
 * @package JasonKaz\FormBuild
 */
class GeneralInput extends FormElement
{
    protected function __construct($Type, $Attribs = array())
    {
        $this->Attribs = $Attribs;

        $this->Code .= '<input type="' . $Type . '"' . $this->parseAttribs($Attribs) . ' />';
    }
}

