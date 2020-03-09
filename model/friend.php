<?php
class Friendz{
    var $username;
    var $friend;
    var $index;

    function __construct($indexs,$usernames,$friends){
        $this->index=$indexs;
        $this->username=$usernames;
        $this->friend=$friends;
    }

    public function getUsername(){return $this->username;}
    public function getFriend(){return $this->friend;}
}
?>