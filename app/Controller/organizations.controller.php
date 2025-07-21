<?php
require_once 'Model/organizations.php';

class OrganizationsController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Organizations();
    }

    public function Crud()
    {
        $alm = new Organizations();

        if (isset($_REQUEST['organizationid'])) {
            $alm = $this->model->getting($_REQUEST['organizationid']);
        }

        require_once 'View/header.php';
        require_once 'View/organizations-crud.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Organizations();

        $alm->organizationid = $_REQUEST['organizationid'];
        $alm->organizationname = $_REQUEST['organizationname'];
        $alm->organizationruc = $_REQUEST['organizationruc'];
        $alm->organizationaddress = $_REQUEST['organizationaddress'];
        $alm->organizationstate = $_REQUEST['organizationstate'];
        $alm->organizationcountry = $_REQUEST['organizationcountry'];
        $alm->organizationweb = $_REQUEST['organizationweb'];
        $alm->organizationphone = $_REQUEST['organizationphone'];
        $alm->organizationemail = $_REQUEST['organizationemail'];

        $this->model->Actualizar($alm);
        header('Location: ?c=Organizations&a=Crud&organizationid=' . $alm->organizationid);
    }    
}
