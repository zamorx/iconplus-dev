<!-- Usuarios -->
<?php
$useractive = 0;
$total = 0;
$billing = 0;
?>

<?php foreach ($this->model->listUsers() as $r) : ?>
  
  <?php if ($r->billinguser == 1 && $r->activeuser == 1) : ?>
      <?php $useractive++ ?> 
  <?php endif; ?> 
  <?php $total++ ?>
<?php endforeach; ?>

<?php $billing = ($useractive * 100) / $total; ?>

<!-- Facturacion -->
<?php
$pending = 0;
$pendingammount = 0;
$lastiva = 0;
$lastincome = 0;
$lastmonth = date('m')-1;
?>

<?php foreach ($this->model->listInvoices() as $r) : ?>
  <?php if ($r->invoicestatus == 1 && $r->invoiceactive == 1) : ?>
      <?php $pending++ ?>
      <?php $pendingammount += $r->serviceprice * 1.15 ?>      
  <?php endif; ?> 

  <?php if ($r->invoiceactive == 1 && ($r->invoicedate = date('m', strtotime($r->invoicedate))) == $lastmonth) : ?>
      <?php $lastiva += $r->serviceprice * 0.15 ?>
      <?php $lastincome += $r->serviceprice?>         
  <?php endif; ?> 

<?php endforeach; ?>

<?php
$currentiva = 0;
$currentincome = 0;
$currentmonth = date('m');
?>

<?php foreach ($this->model->listInvoices() as $r) : ?>
 
  <?php if ($r->invoiceactive == 1 && ($r->invoicedate = date('m', strtotime($r->invoicedate))) == $currentmonth) : ?>
      <?php $currentiva += $r->serviceprice * 0.15 ?> 
      <?php $currentincome += $r->serviceprice?>          
  <?php endif; ?> 

<?php endforeach; ?>
									
    

