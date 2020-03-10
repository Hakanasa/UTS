<?php
class Friend{
    var $username;
    var $friend;


    function __construct($usernames,$friends){
        $this->username=$usernames;
        $this->friend=$friends;
    }

    public function getUsername(){return $this->username;}
    public function getFriend(){return $this->friend;}
}
?>