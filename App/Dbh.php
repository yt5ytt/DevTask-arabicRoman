<?php

/**
 * @package Arabic Roman converter
 * @author Aleksandar Safranec <alexwebsoft.net@gmail.com>
 * Description: PDO DB connection
 */

 namespace App;

 class Dbh
 {

   private $hostname = 'localhost';
   private $username = 'root';
   private $password = '';
   private $dbName = 'arabic_roman';

   protected function dbh()
   {
     $dsn = 'mysql: host=' . $this->hostname . '; dbname=' . $this->dbName . '; charset=utf8; connect_timeout=30';
     $pdo = new \PDO($dsn, $this->username, $this->password);
     $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
     return $pdo;
   }
 }
