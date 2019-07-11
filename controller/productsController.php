<?php

include_once ROOT.'/model/newsModel.php';

class productsController
{
    public function listAction()
    {
        echo "productsController viewAction()";
        return true;
    }

    public function listByIDAction($idProduct)
    {
        echo "productsController listByIDAction($idProduct)";
        return true;

    }
}