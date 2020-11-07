<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: This is simple Arabic to Roman numbers converter
 */

 namespace App;

class GetResult extends Dbh
{

  public function getResult()
  {
    $sql = "SELECT * FROM result";
    $result = $this->dbh()->prepare($sql);
    $result->execute();
    return $result->FetchAll();
  }
}
