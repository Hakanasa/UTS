<?php
class Friends{
    var $username;
    var $friend;


    function __construct($indexs,$usernames,$friends){

        $this->username=$usernames;
        $this->friend=$friends;
    }

    public function getUsername(){return $this->username;}
    public function getFriend(){return $this->friend;}
}
?>