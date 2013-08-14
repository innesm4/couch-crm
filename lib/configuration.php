<?php 
class Configuration {
  public $db_server = 'username.cloudant.com';  
  public $db_port = '5984';
  public $db_database = 'databasename';
  public $db_admin_user = 'username';
  public $db_admin_password = 'password';
	
  public function __get($property) {
    if (getenv($property)) {
      return getenv($property);
    } else {
      return $this->$property;
    }
  }
  
}