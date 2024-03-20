<?php
require_once "User.php";

class Client extends User {
    private string $city;
    private string $state;
    private string $country;

    public function __construct($name, $surname, $username)
    {
        parent::__construct($name, $surname, $username);
    }
    
    public function setCity(string $city){
        $this->city = $city;
    }
    public function setState(string $state){
        $this->state = $state;
    }
    public function setCountry(string $country){
        $this->country = $country;
    }
    public function getCity(){
        return $this->city;
    }
    public function getState(){
        return $this->state;
    }
    public function getCountry(){
        return $this->country;
    }
    public function location(){
        return $this->city . ", " . $this->state . ", " . $this->country;
    }

}


$client1 = new Client("Bartek", "Konkel", "bart");
$client1->setCity("Torun");
$client1->setState("KujawskoPomorskie");
$client1->setCountry("Polska");
echo $client1->location();
?>