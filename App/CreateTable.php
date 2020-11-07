<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: Creates DB table for result inputs
 */

 namespace App;

class CreateTable extends Dbh
{
  public function createTable()
  {
    $sql = "DROP TABLE IF EXISTS result";
    $result = $this->dbh()->prepare($sql);
    $result->execute();

    $sql = "CREATE TABLE IF NOT EXISTS result(
      id INT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      table_key VARCHAR(20) CHARACTER SET utf8,
      table_value VARCHAR(20) CHARACTER SET utf8
    )";
    $result = $this->dbh()->prepare($sql);
    $result->execute();
  }
}
