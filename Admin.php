<?php
require_once "User.php";

class Admin extends User {

    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
        $this->is_admin = true;
    }
    
}


$admin = new Admin("Bartek", "Konkel", "bart");
$admin->get_FullName();

?>