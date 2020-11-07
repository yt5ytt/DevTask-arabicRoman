<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: Inputs data in created result DB table
 */

 namespace App;

class InputData extends Dbh
{
  private $key;
  private $value;

  public function __construct($key, $value)
  {
    $this->key = $key;
    $this->value = $value;
  }

  public function inputData()
  {
    $sql = "INSERT INTO result (table_key, table_value) VALUES (?, ?)";
    $result = $this->dbh()->prepare($sql);
    $result->execute(["$this->key", "$this->value"]);
  }
}
