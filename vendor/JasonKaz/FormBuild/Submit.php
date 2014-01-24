<?php
/**
 * Created by PhpStorm.
 * User: Galicz Miklós
 * Date: 2014.01.24.
 * Time: 12:00
 */

namespace JasonKaz\FormBuild;


/**
 * Class Submit
 * @package JasonKaz\FormBuild
 */
class Submit extends InputButton {

    /**
     * @param string $Label
     * @param array $Attribs
     */
    function __construct($Label='Submit',$Attribs=array('class'=>'btn')) {
        $Attribs['type']='submit';
        parent::__construct($Label,$Attribs);
    }
} 