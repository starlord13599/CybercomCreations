<?php
// phpcs:disable

class Sql
{

    private $hostname = 'localhost';
    private $password = '9993';
    private $user = 'pmauser';
    private $db = 'blogapp';
    public $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect($this->hostname, $this->user, $this->password, $this->db);
        if (!$this->conn) {
            echo 'Unable to connect' . mysqli_connect_error();
        }
    }

    public function insert($prefix, $fname, $lname, $email, $phone, $info, $hashpass)
    {
        $query = "INSERT INTO user(prefix,`first name`,`last name`,email,mobile,info,password) VALUES ('$prefix','$fname','$lname','$email','$phone','$info','$hashpass')";

        if (mysqli_query($this->conn, $query)) {
            return true;
        } else {
            return mysqli_error($this->conn);;
        }
    }
}
