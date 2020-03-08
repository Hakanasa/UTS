<?php
class Comment{
    var $post_id_com;
    var $commenter;
    var $deskripsi_com;
    var $time_com;
    function __construct($mpost_id_com, $mcommenter, $mdeskripsi_com, $mtime_com){
        $this->post_id_com=$mpost_id_com;
        $this->commenter=$mcommenter;
        $this->deskripsi_com =$mdeskripsi_com;
        $this->time_com=$mtime_com;
 
    }
    public function getPostid_com(){return $this->post_id_com;}
    public function getCommenter(){return $this->commenter;}
    public function getDeskripsi_com() {return $this->deskripsi_com;}
    public function getTime_com(){return $this->time_com;}

}
?>