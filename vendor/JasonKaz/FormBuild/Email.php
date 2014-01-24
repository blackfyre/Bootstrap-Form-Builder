<?php
/**
 * Created by PhpStorm.
 * User: Galicz Miklós
 * Date: 2014.01.24.
 * Time: 10:12
 */

namespace JasonKaz\FormBuild;

class Email extends GeneralInput
{
    public function __construct($Attribs = array())
    {
        $this->Attribs = $Attribs;
        $this->setAttributeDefaults(array('class' => 'form-control'));

        parent::__construct('email', $this->Attribs);
    }
}
