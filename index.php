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

  /**
   * Include header
   */
  include(ABSPATH . 'header.php');

  $romanArabic = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
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

  use App\ArabicRoman;

  $number = rand(1,100);
  $converterAR = new ArabicRoman($number, $romanArabic);
  $converterAR->converter();

  ?>
    <div id="container">
  <?php
      if(@$_GET['page'] == ''){
        include(ABSPATH . 'startPage.php');
      }elseif($_GET['page'] == 'roman'){
        include(ABSPATH . 'roman.php');
      }elseif($_GET['page'] == 'arabic'){
        include(ABSPATH . 'arabic.php');
      }
  ?>
    </div>
  <?php

  /**
   * Include footer
   */
  include(ABSPATH . 'footer.php');
