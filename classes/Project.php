<?php
$filepath = realpath(dirname(__FILE__));
include_once $filepath . '/../lib/Database.php';

class Project
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function checkUserName($username)
    {
        $query   = "SELECT * FROM tbl_user WHERE username = '$username' ";
        $getuser = $this->db->select($query);

        if ($username == "") {
            echo "<span class='error' >Please Enter Username.</span>";
            exit();
        } elseif ($getuser) {
            echo "<span class='error' ><b>$username</b> not available.</span>";
            exit();
        } else {
            echo "<span class='success' ><b>$username</b> available.</span>";
            exit();

        }
    }

}
