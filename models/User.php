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
}