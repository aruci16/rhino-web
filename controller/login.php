<?php
/**
 * Created by PhpStorm.
 * User: Aleks Ruci
 * Date: 09.05.2019
 * Time: 16:25
 */
require_once '../core/db/UserDAO.php';

session_start();
$_SESSION = array();
$messageError = "";

if (isset($_POST["login"])) {
    $db = new UserDAO();
    $user = $db->login($_POST['username'], $_POST['password']);
    if (!empty($user)) {
        $_SESSION['id'] = $user[0]['ID'];

        header("Location: home");
    } else {
        $messageError = "Bad Username or Password";
    }
}

include("../view/index.php");