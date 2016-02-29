<?php

class Oauth
{

    public static function isLogged()
    {
        return (isset( $_SESSION['userId']) && isset($_SESSION['userName'])
                    && isset($_SESSION['userGroupId']) && isset($_SESSION['userGroupName']));
    }

    public static function getUserName()
    {
        return 'Admin';
    }

    public static function getUserGroup()
    {
        return 'Administrador';
    }

    public static function doLogin($user, $pass)
    {
        $userModel = Model::factory('User')->where('user', $user);
        $response['error'] = false;


        if($userModel->count() > 0)
        {

            $userObj = $userModel->find_one();

            if($userObj->pass == md5($pass))
            {
                $userGroup = Model::factory('User')->findOne($userObj->user_group_id);

                $_SESSION['userId'] = $userObj->id;
                $_SESSION['userName'] = $userObj->name;
                $_SESSION['userGroupId'] = $userGroup->id;
                $_SESSION['userGroupName'] = $userGroup->name;

            }
            else
            {
                $response['error'] = true;
                $response['errorText'] = utf8_encode('Senha inválida');
            }
        }
        else
        {
            $response['error'] = true;
            $response['errorText'] = utf8_encode('Usuário inválido');
        }

        return json_encode($response, JSON_UNESCAPED_UNICODE );
    }

    public static function doLogout()
    {
        unset($_SESSION['userId'], $_SESSION['userName'], $_SESSION['userGroupId'], $_SESSION['userGroupName']);
    }
}