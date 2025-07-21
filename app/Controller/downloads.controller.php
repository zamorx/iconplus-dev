<?php
require_once 'Model/downloads.php';

class DownloadsController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Downloads();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/activators.php';
        require_once 'View/footer.php';
    }
    
    public function Crud()
    {
        $alm = new Downloads();

        if (isset($_REQUEST['downloadid'])) {
            $alm = $this->model->getting($_REQUEST['downloadid']);
        }

        require_once 'View/header.php';
        require_once 'View/downloads-crud.php';
        require_once 'View/footer.php';
    }

    public function Saved()
    {
        require_once 'View/header.php';
        require_once 'View/downloads-saved.php';
        require_once 'View/footer.php';
    }

    public function Updated()
    {
        require_once 'View/header.php';
        require_once 'View/downloads-updated.php';
        require_once 'View/footer.php';
    }

    public function Deleted()
    {
        require_once 'View/header.php';
        require_once 'View/downloads-deleted.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Downloads();

        $alm->downloadid = $_REQUEST['downloadid'];
        $alm->categoryid = $_REQUEST['categoryid'];
        $alm->osname = $_REQUEST['osname'];
        $alm->downloadname = $_REQUEST['downloadname'];
        $alm->downloadpath = $_REQUEST['downloadpath'];

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        if ($alm->downloadid > 0 ) {
            $this->model->Actualizar($alm);
            header('Location: ?c=Downloads&a=Updated');
        }
        else{
           $this->model->Registrar($alm);
           header('Location: ?c=Downloads&a=Saved');
        }

    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['downloadid']);
        header('Location: ?c=Downloads&a=Deleted');
    }
}