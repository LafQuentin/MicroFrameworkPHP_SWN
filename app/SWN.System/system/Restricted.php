<?php
namespace System;

class Restricted
{
    public static function pageCo()
    {
        if(!isset($_SESSION['id']) && !isset($_SESSION['pseudo']) && !isset($_SESSION['token'])) {
            $_SESSION['pageCo'] = TRUE;
            header('location:http://'.$_SERVER['HTTP_HOST'].'/accueil/inscription-connexion');
        }
        elseif(self::checkToken() != 1) {
            $_SESSION['reloadToken'] = TRUE;
            header('location:http://'.$_SERVER['HTTP_HOST'].'/accueil/inscription-connexion');
        }
    }

    public static function checkToken()
    {
        $data = SPDO::getInstance()->prepare('SELECT * FROM user WHERE id = '.$_SESSION['id'].' AND token ="'.$_SESSION['token'].'"');
        $data->execute();
        return $data->rowCount();
    }

    public static function pageCoDenied()
    {
        if(isset($_SESSION['id']) && isset($_SESSION['pseudo']) && isset($_SESSION['token'])) {
            header('location: http://'.$_SERVER['HTTP_HOST'].'/utilisateur/');
        }
    }

    public static function checkParam($int)
    {
        if($int == 1) {
            if (!isset($_GET['param1']))
                header("location:../");
        }
        elseif($int == 2) {
            if (!isset($_GET['param2']))
                header("location:../");
        }
        elseif($int == 3) {
            if (!isset($_GET['param3']))
                header("location:../");
        }
    }
}