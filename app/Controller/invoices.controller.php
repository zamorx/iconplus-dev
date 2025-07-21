<?php
require_once 'Model/invoices.php';

class InvoicesController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new Invoices();
    }

    public function Index()
    {
        require_once 'View/header.php';
        require_once 'View/invoices.php';
        require_once 'View/footer.php';
    }

    public function Crud()
    {
        $alm = new Invoices();

        if (isset($_REQUEST['invoiceid'])) {
            $alm = $this->model->getting($_REQUEST['invoiceid']);
        }

        require_once 'View/header.php';
        require_once 'View/invoices-crud.php';
        require_once 'View/footer.php';
    }

    public function Saved()
    {
        require_once 'View/header.php';
        require_once 'View/invoices-saved.php';
        require_once 'View/footer.php';
    }

    public function Updated()
    {
        require_once 'View/header.php';
        require_once 'View/invoices-updated.php';
        require_once 'View/footer.php';
    }

    public function Deleted()
    {
        require_once 'View/header.php';
        require_once 'View/invoices-deleted.php';
        require_once 'View/footer.php';
    }

    public function Guardar()
    {
        $alm = new Invoices();

        $alm->invoiceid = $_REQUEST['invoiceid'];
        $alm->companyid = $_REQUEST['companyid'];
        $alm->invoicedate = $_REQUEST['invoicedate'];
        $alm->invoiceservice = $_REQUEST['invoiceservice'];
        $alm->servicedescription = $_REQUEST['servicedescription'];
        $alm->serviceprice = $_REQUEST['serviceprice'];
        $alm->serviceqty = $_REQUEST['serviceqty'];   

        // SI ID Support ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA Support, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        if ($alm->invoiceid > 0 ) {
            $this->model->Actualizar($alm);
            header('Location: ?c=Invoices&a=Updated');
        }
        else{
           $this->model->Registrar($alm);
           header('Location: ?c=Invoices&a=Saved');
        }

    }

    public function Details()
    {
        $alm = new Invoices();

        if (isset($_REQUEST['invoiceid'])) {
            $alm = $this->model->getting($_REQUEST['invoiceid']);
        }

        require_once 'View/header.php';
        require_once 'View/invoices-details.php';
        require_once 'View/footer.php';
    }

    public function convertPDF()
    {
        $alm = new Invoices();

        if (isset($_REQUEST['invoiceid'])) {
            $alm = $this->model->getting($_REQUEST['invoiceid']);
        }

       // require_once 'View/header.php';
        require_once 'View/invoices-to-pdf.php';
       // require_once 'View/footer.php';
    }

    public function goStatus()
    {
        $alm = new Invoices();

        if (isset($_REQUEST['invoiceid'])) {
            $alm = $this->model->getting($_REQUEST['invoiceid']);
        }

        require_once 'View/header.php';
        require_once 'View/invoices-status.php';
        require_once 'View/footer.php';
    }
    
    public function StatusChange()
    {
        $alm = new Invoices();

        $alm->invoiceid = $_REQUEST['invoiceid'];
        $alm->invoicestatus = $_REQUEST['invoicestatus'];

        $this->model->Status($alm);

        header('Location: ?c=Invoices');
    }

    

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['invoiceid']);
        header('Location: ?c=Invoices&a=Deleted');
    }
}
