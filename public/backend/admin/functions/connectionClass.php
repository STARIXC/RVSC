<?php
class connectionClass extends mysqli{
    
    private $host="localhost",$password="",$username="root",$dbName='hbmsdb';
    public $con;
    function __construct() {
        $this->con=  $this->connect($this->host, $this->username, $this->password, $this->dbName);
    }
}
