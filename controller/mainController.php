<?php


class mainController
{
    public function indexAction()
    {
        include (ROOT.'/view/index.php');
        return true;
    }

}