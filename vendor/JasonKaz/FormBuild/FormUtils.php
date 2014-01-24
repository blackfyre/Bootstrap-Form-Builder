<?php
namespace JasonKaz\FormBuild;

/**
 * Class FormUtils
 * @package JasonKaz\FormBuild
 */
class FormUtils
{
    /**
     * @param $ClassString
     * @param $ClassToCheck
     * @return bool
     */
    protected function classExists($ClassString, $ClassToCheck)
    {
        return in_array($ClassToCheck, explode(" ", $ClassString));
    }

    /**
     * @param $ClassString
     * @param $ClassToAdd
     * @return string
     */
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

    /**
     * @param array $Attribs
     * @return string
     */
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
