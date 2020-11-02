<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: This is simple Arabic Roman and otherwise converter and testing app for elementary school kids
 */

class Converter
{

  private array $arabicRoman;
  private int $arabic;
  private string $roman;

  function __construct(array $arabicRoman, int $arabic, string $roman)
  {
    $this->arabicRoman = $arabicRoman;
    $this->arabic = $arabic;
    $this->roman = $roman;
  }
}
