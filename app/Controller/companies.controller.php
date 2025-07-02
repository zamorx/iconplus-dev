<?php
require_once 'Model/companies.php';

class CompaniesController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Companies();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/companies.php';
        require_once 'View/footer.php';
    }

    public function Crud()
    {
        $alm = new Companies();

        if (isset($_REQUEST['companyid'])) {
            $alm = $this->model->getting($_REQUEST['companyid']);
        }

        require_once 'View/header.php';
        require_once 'View/companies-crud.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Companies();

        $alm->companyid = $_REQUEST['companyid'];
        $alm->companyname = $_REQUEST['companyname'];
        $alm->companyruc = $_REQUEST['companyruc'];
        $alm->companyaddress = $_REQUEST['companyaddress'];
        $alm->companycity = $_REQUEST['companycity'];
        $alm->companycountry = $_REQUEST['companycountry'];


        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->companyid > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->companyid > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/

        header('Location: ?c=Companies');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['companyid']);
        header('Location: ?c=Companies');
    }
}
