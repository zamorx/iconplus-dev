<?php
require_once 'Model/downloads.php';

class SecurityController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Downloads();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/security.php';
        require_once 'View/footer.php';
    }
}