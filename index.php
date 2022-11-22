<?php

class newArray
{
    public function __construct()
    {

        $this->colors = array(
            "Red",
            "Green",
            "Yellow",
            "Pink",
            "Blue",
            "Maginda",
            "Purple",
            "Mustard",
            "Brown",
            "Skyblue"
        );
        $this->fruits = array(
            "orange",
            "mango",
            "pineapple",
            "Guavava",
            "Peach",
            "Banana",
            "Pomegranate",
            "Grapefruit",
            "Strawberries",
            "Limes"
        );
        $this->Count = array(
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20
        );
        $this->mixArray=array();
    }
    public function Creat_Assocative_Array()
    {
        $count=0;
        for ($i=1; $i <=20 ; $i++) { 
            
          if ($i%2==0){
            $this->mixArray[$i]=$this->fruits[$count];
            $count++;
          }
          else {
            $this->mixArray[$i]=$this->colors[$count];
           
          } 
        
        }
    
        echo '<pre>';
        print_r( $this->mixArray);
    }
}


$object = new newArray();
$object->Creat_Assocative_Array();
?>