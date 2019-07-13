<?php

include_once ROOT.'/model/productsModel.php';

class productsController
{
    public function listAction()
    {
        require_once (ROOT.'/view/products/products.php');
        return true;
    }

    public function listByIDAction($idProduct)
    {
        require_once (ROOT.'/view/products/products.php');
        return true;

    }
}