<?php
/**
 * Created by PhpStorm.
 * User: Galicz Miklós
 * Date: 2014.01.24.
 * Time: 10:32
 */

namespace JasonKaz\FormBuild;


class InputButton extends FormElement {

    function __construct($Label='Button', $Attribs=array()) {

        $this->Attribs = $Attribs;
        $this->setAttributeDefaults(array('class' => 'btn'));

        $this->Code='<input value="'.$Label.'"';
        $this->Code.=$this->parseAttribs($this->Attribs);
        $this->Code.=' /> ';
    }
}