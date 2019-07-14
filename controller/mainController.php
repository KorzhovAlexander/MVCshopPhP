<?php


class mainController
{
    public function indexAction()
    {
        echo $_SESSION['user'];
        include (ROOT.'/view/index.php');
        return true;
    }

}