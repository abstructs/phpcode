
<form method="POST" action="index.php">
    <input name="username" type="text" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <input name="password_confirmation" type="password" placeholder="Password Confirmation">
    <input type="submit">
</form>

<?php
    require 'controller/NormalUser.php';

    $user = new NormalUser();
    var_dump($user->create("Andrew", "Andrew"));


/**
 * Created by PhpStorm.
 * User: abstruct
 * Date: 2017-10-02
 * Time: 1:42 PM
 */
//    $db = new PDO('sqlite:/Users/abstruct/Desktop/plswork/database.db');
//    echo "Connected to database";
//
//
//    $username = &$_POST['username'];
//    $password = &$_POST['password'];
//    $password_confirmation = &$_POST['password_confirmation'];
//
//    if (!isset($username) && !isset($password) && !isset($password_confirmation)) die("Values not set");
//    if(!$password == $password_confirmation || strlen($password) == 0 || empty($username) || empty($password) || empty($password_confirmation)) die();
//
//    echo $username;
//    $select_users = "SELECT * FROM user;";
//    if(isset($username) && isset($password)) {
//        echo $username;
//        echo $password;
//        $insert_new_user = sprintf("INSERT INTO user (username, password) VALUES (%s %s)", username, password);
//    }
//
//
//    echo $select_users;
////    $db->query($select_users)['user_id'];
//    foreach($db->query($select_users) as $row) {
//        echo '<br>';
//        print_r($row["username"]);
//    }



?>

