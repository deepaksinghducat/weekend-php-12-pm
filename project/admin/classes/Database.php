<?php

class Database
{
    public $hostName = "localhost";
    public $dbname = "blogs";
    public $username = "root";
    public $password = "";

    public function connect()
    {
        return new PDO("mysql:host=$this->hostName;dbname=$this->dbname", $this->username, $this->password);
    }
}
