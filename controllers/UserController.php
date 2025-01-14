<?php

class UserController
{

    public function actionRegister()
    {
        $db = Db::getConnection();
        $name = false;
        $email = false;
        $password = false;
        $result = false;

              
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
             
            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = "Ім'я повинно бути довше 2-х символів";
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Невірний email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль повинен бути довше 6-ти символів';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такий email уже використовується';
            }
            
            if ($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

            
        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    public function actionLogin()
    {
        $db = Db::getConnection();
        $email = false;
        $password = false;
        
              
        if (isset($_POST['submit'])) {
               
               
            $email = $_POST['email'];
            $password = $_POST['password'];

             
            $errors = false;

            if (!User::checkEmail($email)) {
                $errors[] = 'Невірний email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль повинен бути довше 6-ти символів';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                $errors[] = 'Неправильні дані для входу на сайт';
            } else {
                User::auth($userId);

                header("Location: /cabinet");
            }
        }

            
        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION["user"]);
        
        header("Location: /");
    }

}
