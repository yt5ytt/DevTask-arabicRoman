<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: This is simple Arabic to Roman numbers converter
 */

 namespace App;

class ArrayMaker extends Dbh
{
  public $niz;

  public function makeArray()
  {
    $chain = unserialize($niz);
    $chain["$key"] = "$value";

    return $chain;
  }
}
