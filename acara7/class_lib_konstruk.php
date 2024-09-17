<?php
class PersonNew
{
    var $name;

    // Konstruktor dengan parameter
    function __construct($persons_name)
    {
        $this->name = $persons_name;  // Simpan nilai parameter ke dalam variabel kelas
        echo "<p>initialize class: {$this->name}</p>";
    }

    // Setter untuk nama
    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    // Getter untuk nama
    function get_name()
    {
        return $this->name;
    }

    // Destruktor
    function __destruct()
    {
        echo "<p>end class: {$this->name}</p>";
    }
}
