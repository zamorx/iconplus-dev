<?php
require_once 'Model/logins.php';

class LoginsController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Logins();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/logins.php';
        require_once 'View/footer.php';
    }

    public function Crud()
    {
        $alm = new Logins();

        if (isset($_REQUEST['uid'])) {
            $alm = $this->model->getting($_REQUEST['uid']);
        }

        require_once 'View/header.php';
        require_once 'View/logins-crud.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Logins();

        $alm->uid = $_REQUEST['uid'];
        $alm->fname = $_REQUEST['fname'];
        $alm->lname = $_REQUEST['lname'];
        $alm->username = $_REQUEST['username'];
        $alm->email = $_REQUEST['email'];
        $alm->idrol = $_REQUEST['idrol'];
        $alm->aboutme = $_REQUEST['aboutme'];
        $alm->companyid = $_REQUEST['companyid'];
        $alm->loginoccupation = $_REQUEST['loginoccupation'];
        $alm->loginphone = $_REQUEST['loginphone'];
        

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->uid > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->uid > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/

        header('Location: ?c=Logins');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['uid']);
        header('Location: ?c=Logins');
    }

    public function passWD()
    {
        $alm = new Logins();

        if (isset($_REQUEST['uid'])) {
            $alm = $this->model->getting($_REQUEST['uid']);
        }

        require_once 'View/header.php';
        require_once 'View/logins-passwd.php';
        require_once 'View/footer.php';
    }

    public function PasswordChange()
    {
        $alm = new Logins();

        $alm->uid = $_REQUEST['uid'];
        $alm->password = $_REQUEST['password'];

        $this->model->passwordChange($alm);

        header('Location: ?c=Logins');
    }
}
