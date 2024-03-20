<?php
class User {
    public string $name;
    public string $surname;
    public string $username;
    protected bool $is_admin = false;

    public function __construct($name, $surname, $username)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
    }

    public function get_isAdmin(){
        return $this->is_admin;
    }
    public function get_NameSurname(){
        $answer = $this->name . " " . $this->surname;
        if($this->is_admin){
            $answer .= " admin";
        }
        print $answer;
    }
}

$user1 = new User("Bartek", "Konkel", "bart");
$user1->get_NameSurname();
?>