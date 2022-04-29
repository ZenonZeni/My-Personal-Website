<?php
//Class used to manage bookings for admins and members
include ('sqli_connect.php');

class BookingClass{
    public $userID;
    public $username;
    public $priv;
    public $lessons = [];
    
    function __construct($userID, $username) {
        $this->userID = $userID;
        $this->username = $username;
        $this->lessons = $this->getLessons($userID,$username);
    }
    
    private function getLessons($userID, $username){
        $x = [];
        return $x;
    }
    
    public function setPriv($priv){
        $this-> priv = $priv;
    }
    
    public function printLessons(){
        $string = 'testing';
        return $string;
    }
    
    public function printAvailableLessons(){
        $string = 'testing';
        return $string;
    }
    
    public function bookLesson(){
        
    }
    
    public function cancelLesson(){
        
    }
    
}



?>