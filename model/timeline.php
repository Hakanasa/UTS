<?php
class Timeline{
    var $username_tl;
    var $post_id;
    var $deskripsi_tl;
    var $time_tl;
    function __construct($musername_tl, $mpost_id, $mdeskripsi_tl, $mtime_tl){
        $this->username_tl=$musername_tl;
        $this->post_id=$mpost_id;
        $this->deskripsi_tl =$mdeskripsi_tl;
        $this->time_tl=$mtime_tl;
 
    }
    public function getUsernametl(){return $this->username_tl;}
    public function getPostid(){return $this->post_id;}
    public function getDeskripsitl() {return $this->deskripsi_tl;}
    public function getTimetl(){return $this->time_tl;}

}
?>