<?php
class Form
{
    private $action;
    private $title;
    private $control = array();

    public function __construct($action, $title)
    {
        $this->action = $action;
        $this->title = $title;
    }

    public function show()
    {
        echo "<form action='$this->action' method='post'>\n";
        echo "<table align='center' border='1'>\n";
        echo "<caption>$this->title</caption>\n";
        foreach ($this->control as $field => $control_form) {
            echo "<tr><td>" . ucwords($field) . "</td><td>$control_form</td></tr>\n";
        }
        echo "<tr><th colspan='2'><input type='submit'><input type='reset'></th></td>\n";
        echo "</table>\n";
        echo "</form>\n";
    }

    private function textBox($name, $size = "30", $value = "")
    {
        return  "<input type='textbox' name='$name' size='$size' value='$value'";
    }

    public function addTextBox($name, $size = "30", $value = "")
    {
        $this->control[$name] = $this->textBox($name, $size, $value);
    }

    private function comboBox($name, $array, $default_value)
    {
        $combo = "<select name='$name'>\n";
        foreach ($array as $value_of_array) {
            if ($value_of_array == $default_value) {
                $combo = $combo . "<option selected>$value_of_array</option>\n";
            } else {
                $combo = $combo . "<option>$value_of_array</option>\n";
            }
        }
        $combo = $combo . "</select>";
        return $combo;
    }

    public function addComboBox($name, $array, $default_value)
    {
        $this->control[$name] = $this->comboBox($name, $array, $default_value);
    }

    private function checkBox($name, $array, $default_value = "")
    {
        $check = "";
        foreach ($array as $value_of_array) {
            if (strpos($default_value, $value_of_array) === false) {
                $check .= "<input type='checkbox' name=" . $name . "[] value='$value_of_array'>$value_of_array <br>";
            } else {
                $check .= "<input type='checkbox' name=" . $name . "[] value='$value_of_array' checked>$value_of_array <br>";
            }
        }
        return $check;
    }

    public function addCheckBox($name, $array, $default_value = "")
    {
        $this->control[$name] = $this->checkBox($name, $array, $default_value);
    }

    private function radioButton($name, $array, $default_value = "")
    {
        $radio = "";
        foreach ($array as $value_of_array) {
            if ($value_of_array == $default_value) {
                $radio .= "<input type='radio' name='$name' value='$value_of_array' checked>$value_of_array";
            } else {
                $radio .= "<input type='radio' name='$name' value='$value_of_array'>$value_of_array";
            }
        }
        return $radio;
    }

    public function addRadioButton($name, $array, $default_value = "")
    {
        $this->control[$name] = $this->radioButton($name, $array, $default_value);
    }
}
