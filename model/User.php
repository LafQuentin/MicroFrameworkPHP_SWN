<?php
namespace Model;

use System;

class User
{
    public function addUser()
    {
        $data = System\SPDO::getInstance()->prepare('INSERT INTO user(id, pseudo, mail,password,localisation) VALUES(:id, :pseudo, :mail, :password, :localisation)');
        $data->execute(array(
            'id' => '',
            'pseudo' => System\CheckStr::input($_POST['pseudo']),
            'mail' => System\CheckStr::input($_POST['mail']),
            'password' => System\CheckStr::input($_POST['password']),
            'localisation' => null
        ));
    }

    public function checkMail($mail)
    {
        $data = System\SPDO::getInstance()->prepare('SELECT * FROM user WHERE mail = "'.$mail.'"');
        $data->execute();
        return $data->rowCount();
    }

    public function checkPassword($mail, $password)
    {
        $data = System\SPDO::getInstance()->prepare('SELECT * FROM user WHERE mail = "'.$mail.'" AND password ="'.$password.'"');
        $data->execute();
        return $data->rowCount();
    }

    public function updateToken($id, $token)
    {
        $upd = System\SPDO::getInstance()->prepare('UPDATE user SET token = :token WHERE id = '.$id);
        $upd->execute(array('token' => $token));
    }


    public function getDataUser($mail)
    {
        $data = System\SPDO::getInstance()->prepare('SELECT * FROM user WHERE mail = "'.$mail.'"');
        $data->execute();
        return $data->fetchAll()[0];
    }

    public function getDataUserCo($id)
    {
        $data = System\SPDO::getInstance()->prepare('SELECT * FROM user WHERE id = "'.$id.'"');
        $data->execute();
        return $data->fetchAll()[0];
    }

    public function uptdatePassword($id, $password)
    {
        $upd = System\SPDO::getInstance()->prepare('UPDATE user SET password = :password WHERE id = '.$id);
        $upd->execute(array('password' => System\CheckStr::input($password)));
    }

}