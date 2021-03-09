<?php
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="kannadas";
    public $mysql;
    

    public function __construct()
    {
        return $this->mysqli=new mysqli($this->host,$this->user,$this->pass,$this->db);
    }
    public function userfb($data){
        $fname=$data['name'];
        $email=$data['email'];
        $message=$data['message'];
        $q="insert into userfb set Fullname='$name', Email='$email', message='$message'";
        return $this->mysql->query($q);
    }
}