<?php
class Author {
    public $id;
    public $name;
    public $account;
    public $password;
    public function __construct($id, $name, $account, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->account = $account;
        $this->password = $password;
    }
}
