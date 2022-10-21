<?php
 
class maConnection {

  private static ?PDO $connection = null;
  const host = 'localhost';
  const user = 'root';
  const pass = '';
  const base = 'ecf';

  private function __construct() {}

  static public final function getInstance(){
      if(self::$connection === null){
          try {
              self::$connection = new PDO('mysql:host='.self::host.';dbname='.self::base.';charset=utf8', self::user, self::pass,array(
                  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::ATTR_CASE => PDO::CASE_NATURAL,
                  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
              ));
          } catch (PDOException $e) {
              exit("Database connection echoué ".$e->getMessage());
              
          }
      }
      return self::$connection;
  }
}