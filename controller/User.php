<?php
/**
 * Created by PhpStorm.
 * User: 101069860
 * Date: 06/10/2017
 * Time: 12:48 PM
 */

interface User
{
    public function isLoggedIn();
    public function login($username, $password, $password_confirmation);
    public function logout();
}