<?php
class User{
    var $n_depan;
    var $n_belakang;
    var $tanggal_lahir;
    var $jenis_kelamin;
    var $username;
    var $password;
    var $gambar;
    var $deskripsi;
    function __construct($un_depan, $un_belakang, $utanggal_lahir, $ujenis_kelamin, $uusername, $upassword, $ugambar, $udeskripsi){
        $this->n_depan=$un_depan;
        $this->n_belakang=$un_belakang;
        $this->tanggal_lahir=$utanggal_lahir;
        $this->jenis_kelamin=$ujenis_kelamin;
        $this->username =$uusername;
        $this->password=$upassword;
        $this->gambar=$ugambar;
        $this->deskripsi =$udeskripsi;
    }
    public function getNama_depan(){return $this->n_depan;}
    public function getNama_belakang(){return $this->n_belakang;}
    public function getTanggalLahir(){return $this->tanggal_lahir;}
    public function getJenisKelamin(){return $this->jenis_kelamin;}
    public function getUsername() {return $this->username;}
    public function getPassword(){return $this->password;}
    public function getGambar(){return $this->gambar;}
    public function getDeskripsi() {return $this->deskripsi;}
}
?>