<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: This is simple Arabic Roman and otherwise converter and testing app for elementary school kids
 */

/**
 * Define ABSPATH of main folder
 */
 define('DS', DIRECTORY_SEPARATOR);
 define('ABSPATH', dirname(__FILE__) . DS);

 /**
  * Include composer autoload file for App
  */
  include(ABSPATH . 'vendor' . DS . 'autoload.php');

  $arabicRoman = array(
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1
  );
