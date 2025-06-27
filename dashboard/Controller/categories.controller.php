<?php
require_once 'Model/categories.php';

class CategoriesController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Categories();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/categories.php';
        require_once 'View/footer.php';
    }

    public function Crud()
    {
        $alm = new Categories();

        if (isset($_REQUEST['categoryid'])) {
            $alm = $this->model->getting($_REQUEST['categoryid']);
        }

        require_once 'View/header.php';
        require_once 'View/categories-crud.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Categories();

        $alm->categoryid = $_REQUEST['categoryid'];
        $alm->categoryname = $_REQUEST['categoryname'];

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->categoryid > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->categoryid > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/

        header('Location: ?c=Categories');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['categoryid']);
        header('Location: ?c=Categories');
    }
}
