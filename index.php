
<form method="POST">
    <input name="username" type="text" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <input name="password_confirmation" type="password" placeholder="Password Confirmation">
    <input type="submit">
</form>

<?php
/**
 * Created by PhpStorm.
 * User: abstruct
 * Date: 2017-10-02
 * Time: 1:42 PM
 */
    $db = new PDO('sqlite:/Users/abstruct/Desktop/plswork/database.db');
    echo "Connected to database";

    $select_users = "SELECT * FROM user;";
    $insert_new_user = sprintf("INSERT INTO user (username, password) VALUES (%s %s)", username, password);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirmation = $_POST['password_confirmation'];

    if(!$password == $password_confirmation || strlen($password) == 0 || empty($username) || empty($password) || empty($password_confirmation)) {
        die();
    }
    
    echo $insert_new_user

    // $db->query();

?>

