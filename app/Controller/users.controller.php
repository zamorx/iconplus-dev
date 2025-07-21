<?php
require_once 'Model/users.php';

class UsersController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Users();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/users.php';
        require_once 'View/footer.php';
    }

    public function Crud()
    {
        $alm = new Users();

        if (isset($_REQUEST['userid'])) {
            $alm = $this->model->getting($_REQUEST['userid']);
        }

        require_once 'View/header.php';
        require_once 'View/users-crud.php';
        require_once 'View/footer.php';
    }

    public function Saved()
    {
        require_once 'View/header.php';
        require_once 'View/users-saved.php';
        require_once 'View/footer.php';
    }

    public function Updated()
    {
        require_once 'View/header.php';
        require_once 'View/users-updated.php';
        require_once 'View/footer.php';
    }

    public function Deleted()
    {
        require_once 'View/header.php';
        require_once 'View/users-deleted.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Users();

        $alm->userid = $_REQUEST['userid'];
        $alm->fname = $_REQUEST['fname'];
        $alm->companyid = $_REQUEST['companyid'];
        $alm->userrol = $_REQUEST['userrol'];
        $alm->useremail = $_REQUEST['useremail'];
        $alm->userphone = $_REQUEST['userphone'];
        $alm->billinguser = $_REQUEST['billinguser'];
        

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        if ($alm->userid > 0 ) {
            $this->model->Actualizar($alm);
            header('Location: ?c=Users&a=Updated');
        }
        else{
           $this->model->Registrar($alm);
           header('Location: ?c=Users&a=Saved');
        }

    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['userid']);
        header('Location: ?c=Users&a=Deleted');
    }

    public function StepTwo()
    {
        $alm = new Users();

        if (isset($_REQUEST['userid'])) {
            $alm = $this->model->getting($_REQUEST['userid']);
        }

        require_once 'View/header.php';
        require_once 'View/users-steptwo.php';
        require_once 'View/footer.php';
    }

    public function SaveStepTwo()
    {
        $alm = new Users();

        $alm->userid = $_REQUEST['userid'];
        $alm->fname = $_REQUEST['fname'];
        $alm->companyid = $_REQUEST['companyid'];
        $alm->userrol = $_REQUEST['userrol'];
        $alm->useremail = $_REQUEST['useremail'];
        $alm->userphone = $_REQUEST['userphone'];
        $alm->billinguser = $_REQUEST['billinguser'];
        
         $this->model->Registrar($alm);

        header('Location: ?c=Companies&a=stepThree&companyid=' . $alm->companyid);
    }
}
