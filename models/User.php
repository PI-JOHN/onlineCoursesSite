<?php


class User
{
    public static function checkUser($email, $password)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM users WHERE email=:email AND password=:password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        $user = $result->fetch();
        //var_dump($user); die;
        if ($user){
            return $user['id'];
        }
        return false;
    }

    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }

    public static function logout()
    {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
    }


    public static function registration($name, $email, $password)
    {
        $db = Db::getConnection();
        $sql = 'INSERT INTO users (name, email, password ) VALUES (:name, :email, :password)';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        $userId = $db->lastInsertId();

    }


    public static function checkName($name)
    {
        if(strlen($name) < 2){
            return false;
        }
        return true;
    }


    public static function checkEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        return true;
    }


    public static function checkPassword($password)
    {
        if(strlen($password) < 6){
            return false;
        }
        return true;
    }
}