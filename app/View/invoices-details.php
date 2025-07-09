
<?php 
$ammount = $alm->serviceprice * $alm->serviceqty;
$subtotal = $ammount;
$iva = $ammount * 0.15;
$total = $ammount + $iva;
$titletotal = $total;
?>
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Facturas
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Invoices">Facturas</a></li>
								<li class="breadcrumb-item active" aria-current="invoices"><?php echo $alm->invoiceid != null ? $alm->invoiceservice  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

						<?php if($alm->invcurrency == 0): ?>

							<div class="card">
								<div class="card-body m-sm-3 m-md-5">
									<div class="mb-4">
										Hola <strong><?php echo $alm->fname; ?></strong>,
										<br>
										Esta es una factura emitida por el monto de <strong><?php $titletotal = number_format($titletotal, 2);  echo "U$ ". $titletotal; ?></strong> a nombre de <?php echo $alm->companyname; ?>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="text-muted">Factura No.</div>
											<strong># <?php echo $alm->invoiceid; ?></strong>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Fecha de emision</div>
											<strong>
												<?php 
												setlocale(LC_TIME, 'spanish');
												$default_local_date = ucwords(utf8_encode(strftime("%A, %d de %B del %Y",strtotime($alm->invoicedate))));

												$date_connectors_capital = array('De', 'Del');
												$date_connectors_lower = array('de', 'del');

												$local_date = str_replace($date_connectors_capital, $date_connectors_lower, $default_local_date);

												echo $local_date;
											?>
											</strong>
										</div>
									</div>

									<hr class="my-4">

									<div class="row mb-4">
										<div class="col-md-6">
											<div class="text-muted">Cliente</div>
											<strong>
												<?php echo $alm->companyname; ?>
											</strong>
											<p>
												<?php echo $alm->companyruc ?> </br>
												<?php echo $alm->companyaddress; ?> <br>
												<?php echo $alm->companycity; ?> <br>
												10000 <br>
												<?php echo $alm->companycountry; ?> <br>
												<a href="#">
													<?php echo $alm->useremail; ?>
												</a>
											</p>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Pagar a</div>
											<strong>
												ICON PLUS S.A.
											</strong>
											<p>
												J0310000424373</br>
												Colonia Independencia <br>
												Managua <br>
												13011 <br>
												Nicaragua <br>
												<a href="#">
													info@iconplus.net
												</a>
											</p>
										</div>
									</div>

									<table class="table table-sm">
										<thead>
											<tr>
												<th>Descripción</th>
												<th>Precio</th>
												<th class="text-center">Cantidad</th>
												<th class="text-end">Monto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $alm->servicedescription ?></td>
												<td><?php $alm->serviceprice = number_format($alm->serviceprice, 2);  echo "U$ ". $alm->serviceprice; ?></td>
												<td class="text-center"><?php echo $alm->serviceqty ?></td>
												<td class="text-end"><?php $ammount = number_format($ammount, 2);  echo "U$ ". $ammount; ?></td>
											</tr>
										
											<tr>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>Subtotal </th>
												<th class="text-end"><?php $subtotal = number_format($subtotal, 2);  echo "U$ ". $subtotal; ?></th>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>IVA </th>
												<th class="text-end"><?php $iva = number_format($iva, 2);  echo "U$ ". $iva; ?></th>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>Total </th>
												<th class="text-end"><?php $total = number_format($total, 2);  echo "U$ ". $total; ?></th>
											</tr>
										</tbody>
									</table>

									<div class="text-center">
										<p class="text-sm">
											<strong>Extra note:</strong>
											Please send all items at the same time to the shipping address.
											Thanks in advance.
										</p>

										<a href="?c=Invoices&a=convertPDF&invoiceid=<?php echo $alm->invoiceid; ?>" class="btn btn-primary">
											Exportar a pdf
										</a>
									</div>
								</div>
							</div>

						<?php else: ?>

							<div class="card">
								<div class="card-body m-sm-3 m-md-5">
									<div class="mb-4">
										Hola <strong><?php echo $alm->fname; ?></strong>,
										<br>
										Esta es una factura emitida por el monto de <strong><?php $titletotal = number_format($titletotal, 2);  echo "C$ ". $titletotal; ?></strong> a nombre de <?php echo $alm->companyname; ?>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="text-muted">Factura No.</div>
											<strong># <?php echo $alm->invoiceid; ?></strong>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Fecha de emision</div>
											<strong>
												<?php 
												setlocale(LC_TIME, 'spanish');
												$default_local_date = ucwords(utf8_encode(strftime("%A, %d de %B del %Y",strtotime($alm->invoicedate))));

												$date_connectors_capital = array('De', 'Del');
												$date_connectors_lower = array('de', 'del');

												$local_date = str_replace($date_connectors_capital, $date_connectors_lower, $default_local_date);

												echo $local_date;
											?>
											</strong>
										</div>
									</div>

									<hr class="my-4">

									<div class="row mb-4">
										<div class="col-md-6">
											<div class="text-muted">Cliente</div>
											<strong>
												<?php echo $alm->companyname; ?>
											</strong>
											<p>
												<?php echo $alm->companyruc ?> </br>
												<?php echo $alm->companyaddress; ?> <br>
												<?php echo $alm->companycity; ?> <br>
												10000 <br>
												<?php echo $alm->companycountry; ?> <br>
												<a href="#">
													<?php echo $alm->useremail; ?>
												</a>
											</p>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Pagar a</div>
											<strong>
												ICON PLUS S.A.
											</strong>
											<p>
												J0310000424373</br>
												Colonia Independencia <br>
												Managua <br>
												13011 <br>
												Nicaragua <br>
												<a href="#">
													info@iconplus.net
												</a>
											</p>
										</div>
									</div>

									<table class="table table-sm">
										<thead>
											<tr>
												<th>Descripción</th>
												<th>Precio</th>
												<th class="text-center">Cantidad</th>
												<th class="text-end">Monto</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><?php echo $alm->servicedescription ?></td>
												<td><?php $alm->serviceprice = number_format($alm->serviceprice, 2);  echo "C$ ". $alm->serviceprice; ?></td>
												<td class="text-center"><?php echo $alm->serviceqty ?></td>
												<td class="text-end"><?php $ammount = number_format($ammount, 2);  echo "C$ ". $ammount; ?></td>
											</tr>
										
											<tr>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>Subtotal </th>
												<th class="text-end"><?php $subtotal = number_format($subtotal, 2);  echo "C$ ". $subtotal; ?></th>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>IVA </th>
												<th class="text-end"><?php $iva = number_format($iva, 2);  echo "C$ ". $iva; ?></th>
											</tr>
											<tr>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>Total </th>
												<th class="text-end"><?php $total = number_format($total, 2);  echo "C$ ". $total; ?></th>
											</tr>
										</tbody>
									</table>

									<div class="text-center">
										<p class="text-sm">
											<strong>Extra note:</strong>
											Please send all items at the same time to the shipping address.
											Thanks in advance.
										</p>

										<a href="?c=Invoices&a=convertPDF&invoiceid=<?php echo $alm->invoiceid; ?>" class="btn btn-primary">
											Exportar a pdf
										</a>
									</div>
								</div>
							</div>

						<?php endif ?>
							
						</div>

						<div class="col-xxl-3">
							<div class="card">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw align-middle"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Información de facturación</h5>
								</div>
								<div class="card-body">
									<div class="row g-0">
										<div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
											<img src="Assets/img/avatars/administrator.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
										</div>
										<div class="col-sm-9 col-xl-12 col-xxl-8">
											<strong>Usuario de facturación</strong>
											<p><?php echo $alm->fname; ?></p>
										</div>
									</div>

									<table class="table table-sm my-2">
										<tbody>
											<tr>
												<th>Compañía</th>
												<td><?php echo $alm->companyname; ?></td>
											</tr>
											<tr>
												<th>Cargo</th>
												<td><?php echo $alm->userrol; ?></td>
											</tr>
											<tr>
												<th>Email</th>
												<td><?php echo $alm->useremail; ?></td>
											</tr>
											<tr>
												<th>Teléfono</th>
												<td><?php echo $alm->userphone; ?></td>
											</tr>
											<tr>
												<th>Website</th>
												<td><?php echo $alm->companyweb; ?></td>
											</tr>
											<tr>
												<th>Estado</th>
												<td><span class="badge bg-success">Activo</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>