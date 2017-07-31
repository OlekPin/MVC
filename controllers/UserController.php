<?php


class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        $errors = false;
       if (!User::checkName($name)){
            $errors[] = 'Слишком короткое имя';
       }


        if (!User::checkName($email)){
            $errors[] = 'Неправельный имейл';
        }

        if (!User::checkName($password)){
            $errors[] = 'Короче 6 символов';
        }


        if (User::checkEmailExists($email)){
            $errors[] = 'email уже существует';
        }

        if ($errors == false){
            $result = User::register($name, $email, $password);
        }

        require_once (ROOT . '/views/user/register.php');
        return true;
    }

}