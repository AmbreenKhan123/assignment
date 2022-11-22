<?php

class associative
{
    public $fruits = array("1" => "orange", "2" => "mango", "3" => "pineapple", "4" => "Guavava", "5" => "Peach", "6" => "Banana", "7" => "Pomegranate", "8" => "Grapefruit", "9" => "Strawberries", "10" => "Limes");
    public $colors = array("1" => "Red", "2" => "Green", "3" => "Yellow", "4" => "Pink", "5" => "Blue", "6" => "Maginda", "7" => "Purple", "8" => "Mustard", "9" => "Brown", "10" => "Skyblue");
    public $Count = array(20);

    function get_fruit()
    {
        echo "<h1> Fruits </h1> <br>";
        foreach ($this->fruits as $key => $values) {
           
            if ($key % 2 == 0) {
                echo "";
            } else {
                echo "$key = $values <br>";
            }
        }
    }

    function get_color()
    {

        echo "<h1>Colors </h1><br>";
        foreach ($this->colors as $keys => $values) {
            if ($keys % 2 == 0) {
                echo "$keys = $values <br>";
            }
        }
    }
}
$Object1 = new associative();

echo $Object1->get_fruit() . "<br>";
echo $Object1->get_color();
