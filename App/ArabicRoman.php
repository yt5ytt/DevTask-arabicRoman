<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: This is simple Arabic to Roman numbers converter
 */

 namespace App;

class ArabicRoman
{
  public $number;
  public $romanArabic;
  public $romanNumber = '';

  public function __construct($number, $romanArabic)
  {
    $this->number = $number;
    $this->romanArabic = $romanArabic;
  }

  public function converter(){

    while($this->number > 0){
      $this->checkConverter();
    }

  }

  public function checkConverter(){
    foreach($this->romanArabic as $roman => $arabic){
      while($this->number >= $arabic){
        $this->romanNumber = $this->romanNumber . $roman;

        $this->number = $this->number - $arabic;
      }
    }
  }
}
