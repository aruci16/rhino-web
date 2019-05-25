<?php
/**
 * Created by PhpStorm.
 * User: Aleks Ruci
 * Date: 25.05.2019
 * Time: 18:40
 */
session_start();
require_once '../core/manager/UserManager.php';
require_once '../core/model/User.php';
require_once '../core/model/UserType.php';
require_once '../core/validation/Validation.php';
$userController = new UserManager();
$validationController = new Validation();
if (isset($_POST["signUp"])) {

    $name = $_POST["firstname"];
    $last = $_POST["lastname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $username = $_POST["username"];
    $confirmPass = $_POST["confirm_password"];
    $phone = $_POST["phone"];

    if ($pass == $confirmPass) {
        $validationController->checkForSignUp(array($name, $last, $email, $pass, $username, $phone));
        if ($validationController->getError() == 0) {
            $user = new User(null);
            $user->setName($name);
            $user->setSurname($last);
            $user->setPassword($pass);
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setUserType(UserType::$CUSTOMER);
            $user->setPhone($phone);
            $id = $userController->saveUser($user);
            if ($id > 0) {
                $_SESSION["CustomerID"] = $id;
                header("Location: customer-home.php");
            }
        }
    } else {
        $messageError = "Passwords do not match!";
    }


}
if (isset($_POST["goBack"])) {
    header("Location: index.php");
}

include("../view/sign-up-customer.php");
?>