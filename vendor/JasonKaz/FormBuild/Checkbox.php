<?php


namespace JasonKaz\FormBuild;

/**
 * Class Checkbox
 * @package JasonKaz\FormBuild
 */
class Checkbox extends FormElement
{
    /**
     * @param $Text
     * @param $Inline
     * @param array $Attribs
     * @param $FormType
     * @param $LabelWidth
     */
    public function __construct($Text, $Inline, $Attribs = array(), $FormType, $LabelWidth)
    {
        $this->Attribs=$Attribs;

        if ($FormType === FormType::Horizontal) {
            $this->Code .= '<div class="col-sm-offset-' . $LabelWidth . ' col-sm-' . (12 - $LabelWidth) . '">';
        }

        if ($Inline===true){
            $this->Code.='<label class="checkbox-inline"';
        }else{
            $this->Code.='<div class="checkbox"><label';
        }

        $this->Code.='><input type="checkbox"' . $this->parseAttribs($this->Attribs) . ' /> ' . $Text.'</label>';

        if ($Inline===false){
            $this->Code.='</div> ';
        }

        if ($FormType === FormType::Horizontal) {
            $this->Code .= '</div>';
        }
    }
}
