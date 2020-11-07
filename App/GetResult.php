<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: Gets results at the end of test
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
