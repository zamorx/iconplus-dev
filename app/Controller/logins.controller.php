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

    public function Saved()
    {
        require_once 'View/header.php';
        require_once 'View/logins-saved.php';
        require_once 'View/footer.php';
    }

    public function Updated()
    {
        require_once 'View/header.php';
        require_once 'View/logins-updated.php';
        require_once 'View/footer.php';
    }

    public function Deleted()
    {
        require_once 'View/header.php';
        require_once 'View/logins-deleted.php';
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
        $alm->password = $_REQUEST['password'];
        $alm->idrol = $_REQUEST['idrol'];
        $alm->aboutme = $_REQUEST['aboutme'];
        $alm->organizationid = $_REQUEST['organizationid'];
        $alm->loginoccupation = $_REQUEST['loginoccupation'];
        $alm->loginphone = $_REQUEST['loginphone'];
        

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        if ($alm->uid > 0 ) {
            $this->model->Actualizar($alm);
            header('Location: ?c=Logins&a=Updated');
        }
        else{
            $this->model->Registrar($alm);
            header('Location: ?c=Logins&a=Saved');
        }   

    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['uid']);
        header('Location: ?c=Logins&a=Deleted');
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

    public function passUpdated()
    {
        require_once 'View/header.php';
        require_once 'View/logins-passwd-updated.php';
        require_once 'View/footer.php';
    }

    public function PasswordChange()
    {
        $alm = new Logins();

        $alm->uid = $_REQUEST['uid'];
        $alm->password = $_REQUEST['password'];

        $this->model->passwordChange($alm);

        header('Location: ?c=Logins&a=passUpdated');
    }

    public function Profile()
    {
        $alm = new Logins();

        if (isset($_REQUEST['uid'])) {
            $alm = $this->model->getting($_REQUEST['uid']);
        }

        require_once 'View/header.php';
        require_once 'View/logins-profile.php';
        require_once 'View/footer.php';
    }

    public function ProfileSaved()
    {
        $alm = new Logins();

        if (isset($_REQUEST['uid'])) {
            $alm = $this->model->getting($_REQUEST['uid']);
        }

        require_once 'View/header.php';
        require_once 'View/logins-profile-saved.php';
        require_once 'View/footer.php';
    }

    public function saveProfile()
    {
        $alm = new Logins();

        $alm->uid = $_REQUEST['uid'];
        $alm->fname = $_REQUEST['fname'];
        $alm->lname = $_REQUEST['lname'];
        $alm->username = $_REQUEST['username'];
        $alm->email = $_REQUEST['email'];
        $alm->idrol = $_REQUEST['idrol'];
        $alm->aboutme = $_REQUEST['aboutme'];
        $alm->organizationid = $_REQUEST['organizationid'];
        $alm->loginoccupation = $_REQUEST['loginoccupation'];
        $alm->loginphone = $_REQUEST['loginphone'];
        

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $this->model->Actualizar($alm);

        if ($alm->idrol == 1 ) {
            header('Location: ?c=Logins&a=Updated');
        }
        else{
           header('Location: ?c=Logins&a=ProfileSaved&uid=' . $alm->uid);
        }

    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: ?c=Logins');
    }
    public function Login()
    {
        require_once 'View/header.php';
        require_once 'View/logins-login.php';
        require_once 'View/footer.php';
    }
    public function loginUser()
    {
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        $user = $this->model->Login($username, $password);

        if ($user) {
            session_start();
            $_SESSION['uid'] = $user->uid;
            $_SESSION['username'] = $user->username;
            $_SESSION['idrol'] = $user->idrol;
            header('Location: ?c=Home');
        } else {
            echo "<script>alert('Invalid username or password');</script>";
            header('Location: ?c=Logins&a=login');
        }
    } 

}
