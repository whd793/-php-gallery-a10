<?php
class connectionClass extends mysqli{
    
    private $host="localhost",$password="Acoustic1l3233",$username="cgt356web1l",$dbName='cgt356web1l';
    public $con;
    function __construct() {
        $this->con=  $this->connect($this->host, $this->username, $this->password, $this->dbName);
    }
}
