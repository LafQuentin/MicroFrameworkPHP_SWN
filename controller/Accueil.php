<?php

class Accueil
{
    public function index()
    {
        System\Title::setTitle('Pet Story');
        System\Restricted::pageCoDenied();
        $_POST['home'] = TRUE;
        new System\View('accueil');

    }

    public function inscription_connexion()
    {
        System\Title::setTitle('Pet Story - Inscription/Connexion');
        System\Restricted::pageCoDenied();
        new System\Model('User');
        $user = new \Model\User();

        if(isset($_POST['submitIns'])) {
            if(!empty($_POST['pseudo']) || !empty($_POST['mail']) || !empty($_POST['password'])) {
                if ($user->checkMail($_POST['mail']) == 0) {
                    if ($_POST['password'] == $_POST['checkPassword']) {
                        $user->addUser();
                        $getError = array(
                            'Mdp' => TRUE,
                            'Mail' => TRUE,
                            'Inscription' => TRUE,
                            'Input' => TRUE,
                            'MdpCo' => TRUE,
                            'MailCo' => TRUE);
                    } else
                        $getError = array(
                            'Mdp' => FALSE,
                            'Mail' => TRUE,
                            'Inscription' => FALSE,
                            'Input' => TRUE,
                            'MdpCo' => TRUE,
                            'MailCo' => TRUE);
                } else
                    $getError = array(
                        'Mdp' => TRUE,
                        'Mail' => FALSE,
                        'Inscription' => FALSE,
                        'Input' => TRUE,
                        'MdpCo' => TRUE,
                        'MailCo' => TRUE);
            }
            else
                $getError = array(
                    'Mdp' => TRUE,
                    'Mail' => TRUE,
                    'Inscription' => FALSE,
                    'Input' => FALSE,
                    'MdpCo' => TRUE,
                    'MailCo' => TRUE);
        }
        elseif(isset($_POST['submitCo'])) {
                if ($user->checkMail($_POST['mail']) === 1) {
                    if ($user->checkPassword($_POST['mail'], $_POST['password']) === 1) {
                        $get = $user->getDataUser($_POST['mail']);
                        $_SESSION['id'] = $get['id'];
                        $_SESSION['pseudo'] = $get['pseudo'];
                        $_SESSION['token'] = \System\Token::token();
                        $user->updateToken($_SESSION['id'], $_SESSION['token']);
                        header('Location: ../../utilisateur/');
                    } else
                        $getError = array(
                            'MdpCo' => FALSE,
                            'MailCo' => TRUE,
                            'Mdp' => TRUE,
                            'Mail' => TRUE,
                            'Input' => TRUE,
                            'Inscription' => FALSE);
                }
                else
                    $getError = array(
                        'MdpCo' => TRUE,
                        'MailCo' => FALSE,
                        'Mdp' => TRUE,
                        'Mail' => TRUE,
                        'Input' => TRUE,
                        'Inscription' => FALSE);
        }
        else
            $getError = array(
                'MdpCo' => TRUE,
                'MailCo' => TRUE,
                'Mdp' => TRUE,
                'Mail' => TRUE,
                'Input' => TRUE,
                'Inscription' => FALSE);

        new System\View('inscription-connexion', $getError);
    }
}