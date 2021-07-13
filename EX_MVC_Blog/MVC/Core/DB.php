<?php
class DB
{
    protected $dsn = "mysql:host=localhost;dbname=BolgMVC";
    protected $user = "phpmyadmin";
    protected $password = "1";
    public  $connection;
    public function __construct()
    {
        $this->connection = new PDO($this->dsn, $this->user, $this->password);
    }
}
?>
