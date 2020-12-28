<?php
class Hotel{
    private $name;
    private $category;
    private $type;
    private $location;
    private $city;
    private $description;

    function __construct($name,$category,$type,$location,$city,$description)
    {
        $this->name=$name;
        $this->category=$category;
        $this->type=$type;
        $this->city=$city;
        $this->description=$description;
        $this->location=$location;



    }
    function showDetails(){
        echo "hotel name:  $this->name" ;
      foreach  ($this->category as $value){
        echo "hotel category: " . $value ;
      }
      foreach  ($this->type as $value){
        echo "hotel type: " . $value ;
      }
        
      
        echo "hotel location:  $this->location" ;
        echo "hotel city:  $this->city" ;
        echo "hotel description:  $this->description" ;


    }    

}
?>