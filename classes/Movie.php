<?php

class Movie{
    public $title;
    public $movieDirector;
    public $year;
    public $duration;
    public $genre;
    public $price;
    public $discount = 0;

    public function __construct($_title, $_movieDirector, $_year, $_duration, array $_genre, $_price){

        $this->title = $_title;
        $this->movieDirector = $_movieDirector;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genre = $_genre;
        $this->price = $_price;
        $this->setDiscount($_year);
        
        
      }
      public function setDiscount($year) {
        if($year < 1990) {
            $this->discount = $this->price * 0.5;
        }
  
      }
      public function getDiscount() {
        return $this->discount;
  
      }
    }