<?php
namespace app\model;
use PDO;

class DBconnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:local=localhost;dbname=shop_manader";
        $this->username = "root";
        $this->password = "123456@Abc";
    }
    public function connectDB(){
        $connect = new PDO($this->dsn, $this->username, $this->password);
        return $connect;
    }
}