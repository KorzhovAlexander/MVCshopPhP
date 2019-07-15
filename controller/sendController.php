<?php


class sendController
{
    public function sendAction()
    {
        $categorylist=categoryModel::getCategoriesList();
        require_once (ROOT.'/view/send/send.php');
        return true;
    }
}