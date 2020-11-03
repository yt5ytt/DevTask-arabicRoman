<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: This is simple Arabic to Roman numbers converter
 */

 namespace App;

class ArabicRoman
{
  private $number;
  private $romanArabic;
  public $romanNumber = '';

  /**
   * @param properties
   * Description: Sets basic properties
   */
  public function __construct($number, $romanArabic)
  {
    $this->number = $number;
    $this->romanArabic = $romanArabic;
  }

  /**
   * @param $this->romanNumber
   * @return
   * Description: convert arabic to roman numbers
   */
  public function converter(){
    while($this->number > 0){
      $this->checkConverter();
    }
  }

  /**
   * @param
   * Description: CheckConverter function
   */
  private function checkConverter(){
    foreach($this->romanArabic as $roman => $arabic){
      while($this->number >= $arabic){
        $this->romanNumber = $this->romanNumber . $roman;

        $this->number = $this->number - $arabic;
      }
    }
  }
}
