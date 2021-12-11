<?php

class User{

    public $id;
    public $username;
    public $password;

    public function __construct($id = null, $username = null, $password = null){ // konstruktor

        $this->id = $id; // this = objekat
        $this->username = $username;
        $this->password = $password;
    } 

    public static function loginUser($usr, mysqli $conn){ //mysqli - Tip objekata koji predstavlja konekciju izmedju php-a i mysql baze
        $query = "SELECT * FROM user WHERE username= '$usr->username' and password='$usr->password";
        // Konekcija sa bazom
        return $conn->query($query);
    }

}


?>