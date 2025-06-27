<?php
require_once 'Model/downloads.php';

class SupportController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Downloads();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/support.php';
        require_once 'View/footer.php';
    }
}