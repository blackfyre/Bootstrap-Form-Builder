<?php
namespace JasonKaz\FormBuild;

/**
 * Class FormUtils
 * @package JasonKaz\FormBuild
 */
class FormUtils
{
    protected function classExists($ClassString, $ClassToCheck)
    {
        return in_array($ClassToCheck, explode(" ", $ClassString));
    }

    protected function addClass($ClassString, $ClassToAdd)
    {
        if (!self::classExists($ClassString, $ClassToAdd)) {
            return $ClassString . ' ' . $ClassToAdd;
        }

        return $ClassString;
    }

    /**
     * Get the calling class to assist the validation
     * @return mixed
     */
    private function getCaller() {
        $caller = get_called_class();

        $caller = explode('\\',$caller);

        return strtolower(end($caller));
    }

    protected function parseAttribs($Attribs = array())
    {
        $Str = "";

        $Properties = array('disabled', 'readonly', 'multiple', 'checked', 'required', 'autofocus');

        foreach ($Attribs as $key => $val) {
            if (in_array($key, $Properties)) {
                if ($val === true) {
                    $Str .= ' ' . strtolower($key);
                }
            } else {

                if ($key == 'name') {
                    $Str .= ' ' . $key . '="' . $this->getCaller() . '-' . $val . '"';
                } else {
                    $Str .= ' ' . $key . '="' . $val . '"';
                }

            }
        }

        return $Str;
    }
}
