<?php require_once "vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->setIsRemoteEnabled(true);

$dompdf = new Dompdf($options);

$monto = $alm->serviceprice * $alm->serviceqty;
$iva = $monto * 0.15;
$total = $monto + $iva;

// Format the amounts to two decimal places
$monto = number_format($monto, 2);
$iva = number_format($iva, 2);
$total = number_format($total, 2);
$alm->serviceprice = number_format($alm->serviceprice, 2);


setlocale(LC_TIME, 'spanish');
$default_local_date = ucwords(utf8_encode(strftime("%A, %d de %B del %Y",strtotime($alm->invoicedate))));

$date_connectors_capital = array('De', 'Del');
$date_connectors_lower = array('de', 'del');

$local_date = str_replace($date_connectors_capital, $date_connectors_lower, $default_local_date);

if ($alm->invcurrency == 0) {
    $html = ('<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factura-00<?php echo $alm->invoiceid ?>-<?php echo $alm->companyname ?>-<?php echo $alm->invoiceservice ?>-<?php echo $alm->invoicedate ?></title>
    
        <style>
            table.main {
                font-family: Arial, Helvetica, sans-serif !important;
                font-size: 12px;
                
            }
    
            #company {
                margin: 25px 0 75px 0;
            }
    
            #payment {
                margin: 75px 0 25px 0;
            }
        </style>
    
    </head>
    <body>
    <table id="company" class="main" width="100%" cellSpacing="0" cellPadding="0" border="0">
            <tbody>
                <tr>
                    <td width="50%">
                        <div>
                            <img src="https://iconplus.net/app/Assets/img/logos/iconplusa.jpg" alt="ICON PLUS S.A." width="320">
                        </div>
                    </td>
                    <td width="50%">
                        <div>
                            
                            <strong>CONSULTORES INFORMATICOS PLUS S.A.<br>
                            RUC: J0310000424373</strong><br>
                            Colonia Miguel Cervantes 85 vrs. al Sur <br>
                            Email: <a href="mailto:info@iconplus.net">info@iconplus.net</a><br>
                            Teléfono: +505.5871-2626
        
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    
        <table class="main" width="100%" cellSpacing="0" cellPadding="0" border="0">
            <tbody>
              
                <tr valign="top">
                    <td width="75%">
                        <table width="100%" cellSpacing="0" cellPadding="0" border="0">
                            <tbody>
                            <tr>
                                    <td>
                                        <table id="company-data" width="100%">
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th
                                                                    style="padding:15px 10px 0 10px;text-align:left;width:110px">
                                                                    Factura No.
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0 0 0 10px;text-align:left;width:110px">
                                                                    00'.$alm->invoiceid.'
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
    
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th style="padding:15px 10px 0 10px;text-align:left;">
                                                       '.$alm->companyname.'
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 0 0 10px;text-align:left;width:110px">
                                        '.$alm->companyruc.'
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 0 25px 10px;text-align:left;width:110px">
                                       <a href="mailto:'.$alm->useremail.'">'.$alm->useremail.'</a> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="25%" valign="right">
                        <table>
                            <tbody>
                                <tr>
                                    <th style="padding:15px 10px 0 0;text-align:left;">
                                        Fecha de emisión
                                    </th>
                                </tr>
                                <tr>
                                    <td style="padding:0 10px 0 0;text-align:left;">
                                     '.$local_date.'
                                     
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    
                    </td>
                </tr>
            </tbody>
        </table>
    
        <table class="main" width="100%" cellSpacing="0" cellPadding="0" border="0">
            <thead>
                <tr>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:left;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:250px">
                        Descripción</th>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:right;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:60px">
                        Precio</th>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:right;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:60px">
                        Cantidad</th>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:right;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:60px">
                        Monto</th>
                </tr>
    
            </thead>
    
            <tbody>
                <tr valign="top">
                    <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:left;border-top:0px">'.$alm->servicedescription.'</th>
                    <td style="border-bottom:1px solid #CBD2D6;padding:22px 10px;text-align:right;border-top:0px">U$ '.$alm->serviceprice.'</th>
                    <td style="border-bottom:1px solid #CBD2D6;padding:22px 10px;text-align:right;border-top:0px">'.$alm->serviceqty.'</th>
                    <td style="border-bottom:1px solid #CBD2D6;padding:22px 10px;text-align:right;border-top:0px">U$ '.$monto.'</th>
                </tr>
    
                <tr>
    
                    <td></td>
                    <td></td>
                    <th style="text-align:right;padding:25px 10px 0px 0px;vertical-align:top" colSpan="1">
                        Subtotal</th>
                    <td style="text-align:right;padding:25px 10px 0px 0px;vertical-align:top" colSpan="1">U$ '.$monto.'
                    </td>
                </tr>
                <tr>
    
                    <td></td>
                    <td></td>
                    <th style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">IVA
                    </th>
                    <td style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">U$ '.$iva.'</td>
                </tr>
                <tr>
    
                    <td></td>
                    <td></td>
                    <th style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">Total
                    </th>
                    <td style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">U$ '.$total.'
                    </td>
                </tr>
    
            </tbody>
        </table>
        <table class="main" id="payment">
            <tbody>
                <tr>
                    <td>
                        <h4>TRANSFERENCIA / DEPÓSITO</h4>
                    </td>
                    <td>
    
                    </td>
                </tr>
                <tr>
                    <td>
                    Cuenta Córdobas No. 367 764 594
                    </td>
                    <th>
                        BAC
                    </th>
                </tr>
                <tr>
                    <td>
                    Cuenta Dólares No. 365 943 430
                    </td>
                    <th>
                        BAC
                    </th>
                </tr>
            </tbody>
        </table>
        
    </body>
    </html>');
} else {
    $html = ('<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factura-00<?php echo $alm->invoiceid ?>-<?php echo $alm->companyname ?>-<?php echo $alm->invoiceservice ?>-<?php echo $alm->invoicedate ?></title>
    
        <style>
            table.main {
                font-family: Arial, Helvetica, sans-serif !important;
                font-size: 12px;
                
            }
    
            #company {
                margin: 25px 0 75px 0;
            }
    
            #payment {
                margin: 75px 0 25px 0;
            }
        </style>
    
    </head>
    <body>
    <table id="company" class="main" width="100%" cellSpacing="0" cellPadding="0" border="0">
            <tbody>
                <tr>
                    <td width="50%">
                        <div>
                            <img src="https://iconplus.net/app/Assets/img/logos/iconplusa.jpg" alt="ICON PLUS S.A." width="320">
                        </div>
                    </td>
                    <td width="50%">
                        <div>
                            
                            <strong>CONSULTORES INFORMATICOS PLUS S.A.<br>
                            RUC: J0310000424373</strong><br>
                            Colonia Miguel Cervantes 85 vrs. al Sur <br>
                            Email: <a href="mailto:info@iconplus.net">info@iconplus.net</a><br>
                            Teléfono: +505.5871-2626
        
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    
        <table class="main" width="100%" cellSpacing="0" cellPadding="0" border="0">
            <tbody>
              
                <tr valign="top">
                    <td width="75%">
                        <table width="100%" cellSpacing="0" cellPadding="0" border="0">
                            <tbody>
                            <tr>
                                    <td>
                                        <table id="company-data" width="100%">
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <th
                                                                    style="padding:15px 10px 0 10px;text-align:left;width:110px">
                                                                    Factura No.
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td style="padding:0 0 0 10px;text-align:left;width:110px">
                                                                    00'.$alm->invoiceid.'
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
    
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th style="padding:15px 10px 0 10px;text-align:left;">
                                                       '.$alm->companyname.'
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 0 0 10px;text-align:left;width:110px">
                                        '.$alm->companyruc.'
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 0 25px 10px;text-align:left;width:110px">
                                       <a href="mailto:'.$alm->useremail.'">'.$alm->useremail.'</a> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="25%" valign="right">
                        <table>
                            <tbody>
                                <tr>
                                    <th style="padding:15px 10px 0 0;text-align:left;">
                                        Fecha de emisión
                                    </th>
                                </tr>
                                <tr>
                                    <td style="padding:0 10px 0 0;text-align:left;">
                                     '.$local_date.'
                                     
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    
                    </td>
                </tr>
            </tbody>
        </table>
    
        <table class="main" width="100%" cellSpacing="0" cellPadding="0" border="0">
            <thead>
                <tr>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:left;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:250px">
                        Descripción</th>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:right;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:60px">
                        Precio</th>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:right;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:60px">
                        Cantidad</th>
                    <th
                        style="border-bottom:1px solid #B7BCBF;padding:15px 10px;text-align:right;border-top:1px solid #B7BCBF;background-color:#F5F7FA;width:60px">
                        Monto</th>
                </tr>
    
            </thead>
    
            <tbody>
                <tr valign="top">
                    <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:left;border-top:0px">'.$alm->servicedescription.'</th>
                    <td style="border-bottom:1px solid #CBD2D6;padding:22px 10px;text-align:right;border-top:0px">C$ '.$alm->serviceprice.'</th>
                    <td style="border-bottom:1px solid #CBD2D6;padding:22px 10px;text-align:right;border-top:0px">'.$alm->serviceqty.'</th>
                    <td style="border-bottom:1px solid #CBD2D6;padding:22px 10px;text-align:right;border-top:0px">C$ '.$monto.'</th>
                </tr>
    
                <tr>
    
                    <td></td>
                    <td></td>
                    <th style="text-align:right;padding:25px 10px 0px 0px;vertical-align:top" colSpan="1">
                        Subtotal</th>
                    <td style="text-align:right;padding:25px 10px 0px 0px;vertical-align:top" colSpan="1">C$ '.$monto.'
                    </td>
                </tr>
                <tr>
    
                    <td></td>
                    <td></td>
                    <th style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">IVA
                    </th>
                    <td style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">C$ '.$iva.'</td>
                </tr>
                <tr>
    
                    <td></td>
                    <td></td>
                    <th style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">Total
                    </th>
                    <td style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">C$ '.$total.'
                    </td>
                </tr>
    
            </tbody>
        </table>
        <table class="main" id="payment">
            <tbody>
                <tr>
                    <td>
                        <h4>TRANSFERENCIA / DEPÓSITO</h4>
                    </td>
                    <td>
    
                    </td>
                </tr>
                <tr>
                    <td>
                    Cuenta Córdobas No. 367 764 594
                    </td>
                    <th>
                        BAC
                    </th>
                </tr>
                <tr>
                    <td>
                    Cuenta Dólares No. 365 943 430
                    </td>
                    <th>
                        BAC
                    </th>
                </tr>
            </tbody>
        </table>
        
    </body>
    </html>');
}

$dompdf->loadHTML($html);

$dompdf->setPaper('A4','portrait');

$dompdf->render();

$dompdf->stream('Factura-00'.$alm->invoiceid.'-'.$alm->companyname.'-'.$alm->invoiceservice.'-'.$alm->invoicedate.'.pdf');