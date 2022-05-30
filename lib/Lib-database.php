<?php
class DB{
      // (A) CONSTRUCTOR - CONNECT TO THE DATABASE
      private $pdo = null;
      private $stmt = null;
      public $error;
      function __construct () {
            try {
                  $this->pdo = new PDO(
                        "$mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charser=" . DB_CHARSET, DB_USER, DB_PASSWORD [
                              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                              PDO::ATTR_DEFAULT_FETCH _MODE => PDO::FETCH_ASSOC
                        ]
                        );
            } catch(Exception $ex) {exit($ex->getMessage());} // The exit() function in PHP is an inbuilt function which is used to output a message and terminate the current script.
      }

      // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
      function __destruct(){
            if($this->stmt !== null) { $this->stmt == null; }
            if($this->pdo !== null) { $this->pdo == null; }
      }

      // (C) EXECUTE SQL QUERY
      function exec($sql, $data = null) {
            try{
                  $this->stmt = $this->pdo->prepare($sql);
                  $this->stmt->execute($data);
                  return true;
            } catch(Exception $ex) { 
                  $this->error = $ex->getMessage();
                  return false;
             }
      }

      // (D) FETCH
      function fetch ($sql, $data=null) {
            if ($this->exec($sql, $data) === false) { return false; }
            return $this->stmt->fetch();
      }
}