<!DOCTYPE html>
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
<?php 
$iva = 0;
$total = 0;
setlocale(LC_MONETARY,"en_US");
?>
<table id="company" class="main" width="100%" cellSpacing="0" cellPadding="0" border="0">
        <tbody>
            <tr>
                <td width="50%">
                    <div>
                        <img src="https://iconplus.net/dashboard/assets/img/companies/iconplusa.jpg" alt="ICON PLUS S.A." width="320">
                    </div>
                </td>
                <td width="50%">
                    <div>
                        
                        <h4>CONSULTORES INFORMATICOS PLUS S.A.</h4> 
                        RUC: J0310000424373 <br>
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
                <td>
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
                                                                00<?php echo $alm->invoiceid ?>
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
                                                   <?php echo $alm->companyname ?>
                                                </th>
                                            </tr>
                                        </tbody>
                                    </table>

                                </td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 0 10px;text-align:left;width:110px">
                                    <?php echo $alm->companyruc ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 25px 10px;text-align:left;width:110px">
                                   <a href="mailto:<?php echo $alm->useremail ?>"><?php echo $alm->useremail ?></a> 
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="right">
                    <table>
                        <tbody>
                            <tr>
                                <th style="padding:15px 10px 0 0;text-align:left;">
                                    Fecha de emisión
                                </th>
                            </tr>
                            <tr>
                                <td style="padding:0 10px 0 0;text-align:left;">
                                 <?php $origDate = "$alm->invoicedate"; 
                                 $newDate = date("F d, Y", strtotime($origDate)); 
                                 echo $newDate; ?>
                                 
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

        <?php if($alm->invcurrency == 0) : ?>
        <tbody>
            <tr valign="top">
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:left;border-top:0px"><?php echo $alm->servicedescription ?></th>
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:right;border-top:0px"><?php echo money_format("U%n", $alm->serviceprice);?></th>
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:right;border-top:0px">1</th>
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:right;border-top:0px"><?php echo money_format("U%n", $alm->serviceprice);?></th>
            </tr>

            <tr>

                <td></td>
                <td></td>
                <th style="text-align:right;padding:25px 10px 0px 0px;vertical-align:top" colSpan="1">
                    Subtotal</th>
                <td style="text-align:right;padding:25px 10px 0px 0px;vertical-align:top" colSpan="1"><?php $alm->serviceprice ?><?php echo money_format("U%n", $alm->serviceprice);?>
                </td>
            </tr>
            <tr>

                <td></td>
                <td></td>
                <th style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">IVA
                </th>
                <td style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1"><?php $iva = $alm->serviceprice * 0.15 ?><?php echo money_format("U%n", $iva);?></td>
            </tr>
            <tr>

                <td></td>
                <td></td>
                <th style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1">Total
                </th>
                <td style="text-align:right;padding:10px 10px 0px 0px;vertical-align:top" colSpan="1"><?php $total = $alm->serviceprice + $iva ?><?php echo money_format("U%n", $total);?>
                </td>
            </tr>

        </tbody>
        <?php elseif($alm->invcurrency == 1) : ?>
            <tbody>
            <tr valign="top">
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:left;border-top:0px"><?php echo $alm->servicedescription ?></th>
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:right;border-top:0px"><?php echo money_format("C%n", $alm->serviceprice);?></th>
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:right;border-top:0px">1</th>
                <td style="border-bottom:1px solid #CBD2D6;padding:10px 10px;text-align:right;border-top:0px"><?php echo money_format("C%n", $alm->serviceprice);?></th>
            </tr>

            <tr>

                <td></td>
                <td></td>
                <th style="text-align:right;padding:5px 10px 0px 0px;vertical-align:top" colSpan="1">
                    Subtotal</th>
                <td style="text-align:right;padding:5px 10px 0px 0px;vertical-align:top" colSpan="1"><?php $alm->serviceprice ?><?php echo money_format("C%n", $alm->serviceprice);?>
                </td>
            </tr>
            <tr>

                <td></td>
                <td></td>
                <th style="text-align:right;padding:5px 10px 0px 0px;vertical-align:top" colSpan="1">IVA
                </th>
                <td style="text-align:right;padding:5px 10px 0px 0px;vertical-align:top" colSpan="1"><?php $iva = $alm->serviceprice * 0.15 ?><?php echo money_format("C%n", $iva);?></td>
            </tr>
            <tr>

                <td></td>
                <td></td>
                <th style="text-align:right;padding:5px 10px 0px 0px;vertical-align:top" colSpan="1">Total
                </th>
                <td style="text-align:right;padding:5px 10px 0px 0px;vertical-align:top" colSpan="1"><?php $total = $alm->serviceprice + $iva ?><?php echo money_format("C%n", $total);?>
                </td>
            </tr>

        </tbody>
        <?php endif; ?>
    </table>
    <table class="main" id="payment">
        <tbody>
            <tr>
                <td>
                    <h4>TRANSFERENCIA / DEPOSITO</h4>
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
</html>