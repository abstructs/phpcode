<?php
/**
 * Created by PhpStorm.
 * User: 101069860
 * Date: 06/10/2017
 * Time: 12:52 PM
 */
require 'User.php';
class NormalUser implements User
{
    private $username;
    private $isLoggedIn;
    private $db;

    public function __construct() {
        $isLoggedIn = false;
    }

    private function connect() {
        $this->db = new PDO('sqlite:/Users/abstruct/Desktop/plswork/database.db');
    }

    private function isValidUser($username, $password, $password_confirmation) {
        return $password === $password_confirmation;
    }

    public function isLoggedIn() {
        return $this->isLoggedIn;
    }

    public function login($username, $password, $password_confirmation) {
        $valid_user = $this->isValidUser($username, $password, $password_confirmation);

        if ($valid_user) $this->isLoggedIn = true;
        else die('Invalid information');
    }

    public function logout()
    {
        if(isLoggedIn) $this->isLoggedIn = false;
        else die('User not logged in.');
    }

    public function create($username, $password) {
        $this->connect();

        $result = $this->db->query(sprintf("SELECT username FROM user WHERE username='%s'", $username));
        if($result) {
            return false;
        }

        $this->db->query(sprintf("INSERT INTO user (username, password) VALUES('%s', '%s');", $username, $password));
    }
}