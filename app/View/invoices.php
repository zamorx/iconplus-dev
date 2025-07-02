
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Facturas
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="facturas">Facturas</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Facturas</h5>
									<h6 class="card-subtitle text-muted">Un resumen de todas las facturas emitidas, incluyendo detalles clave como fechas de emisión, nombres de clientes, productos/servicios y estado de pago. Esta lista facilita el seguimiento de la facturación y el control de los pagos pendientes.</h6>
								</div>
								<table id="datatables-reponsive" class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Date</th>
											<th>#</th>
											<th>Company name</th>
											<th>Service</th>
											<th>Status</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($this->model->Listar() as $r) : ?>
										<tr>
											<td>
												<img src="Assets/img/logos/<?php echo $r->companyid; ?>.jpg" width="48" height="48" class="rounded-circle me-2" alt="<?php echo $r->fname; ?>">
												<?php echo $r->invoicedate; ?>
											</td>
											<td><?php echo $r->invoiceid; ?></td>
											<td><?php echo $r->shortname; ?></td>
											<td><?php echo $r->invoiceservice; ?></td>
											<td>

											<?php if ($r->invoiceactive == 1) : ?>
													<? if ($r->invoicestatus == 2) : ?>
														<span class="badge bg-success">Paid</span>
													<? elseif ($r->invoicestatus == 1) : ?>
														<span class="badge bg-warning">Pending</span>
													<? elseif ($r->invoicestatus == 0):?>
														<span class="badge bg-secondary">Issued</span>
													<? endif; ?>
											<? else : ?>
													<span class="badge bg-danger">Deleted</span>
											<?endif; ?>

											</td>
											<td>
												<div class="d-inline-block dropdown show">
													<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
													</a>

													<div class="dropdown-menu dropdown-menu-end">
														<?php if ($r->invoiceactive == 1) : ?>

															<?if ($r->invoicestatus == 0) : ?>
															<a class="dropdown-item" href="?c=Invoices&a=Crud&invoiceid=<?php echo $r->invoiceid; ?>">Update</a>
															<a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');" href="?c=Invoices&a=Eliminar&invoiceid=<?php echo $r->invoiceid; ?>">Delete</a>
															<a class="dropdown-item" href="?c=Invoices&a=goStatus&invoiceid=<?php echo $r->invoiceid; ?>">Status</a>
															<? elseif ($r->invoicestatus == 1) : ?>
															<a class="dropdown-item" href="?c=Invoices&a=goStatus&invoiceid=<?php echo $r->invoiceid; ?>">Status</a>
															<a class="dropdown-item"  href="?c=Invoices&a=Details&invoiceid=<?php echo $r->invoiceid; ?>">View</a>
															<a class="dropdown-item" href="?c=Invoices&a=convertPDF&invoiceid=<?php echo $r->invoiceid; ?>">Create pdf</a>
															<? else : ?>
															<a class="dropdown-item"  href="?c=Invoices&a=Details&invoiceid=<?php echo $r->invoiceid; ?>">View</a>
															<a class="dropdown-item" href="?c=Invoices&a=convertPDF&invoiceid=<?php echo $r->invoiceid; ?>">Create pdf</a>
																
															
															<? endif; ?>

														<? else : ?>
															<span class="dropdown-item">No Actions</span>

														<?endif; ?>
														
														
													</div>
												</div>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							
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
									<h5 class="card-title mb-0"><?php echo $userDetails->fname; ?> <?php echo $userDetails->lname; ?></h5>
								</div>
								<div class="card-body">
									<div class="row g-0">
										<div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
											<img src="Assets/img/avatars/<?php echo $userDetails->username; ?>.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
										</div>
										<div class="col-sm-9 col-xl-12 col-xxl-8">
											<strong>About me</strong>
											<p><?php echo $userDetails->aboutme; ?></p>
										</div>
									</div>

									<table class="table table-sm my-2">
										<tbody>
											<tr>
												<th>Name</th>
												<td><?php echo $userDetails->fname; ?> <?php echo $userDetails->lname; ?></td>
											</tr>
											<tr>
												<th>Company</th>
												<td><?php echo $userDetails->companyname; ?></td>
											</tr>
											<tr>
												<th>Occupation</th>
												<td><?php echo $userDetails->loginoccupation; ?></td>
											</tr>
											<tr>
												<th>Email</th>
												<td><?php echo $userDetails->email; ?></td>
											</tr>
											<tr>
												<th>Phone</th>
												<td><?php echo $userDetails->loginphone; ?></td>
											</tr>
											<tr>
												<th>Website</th>
												<td>www.iconplus.net</td>
											</tr>
											<tr>
												<th>Status</th>
												<td><span class="badge bg-success">Active</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
								

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			
			// Datatables Responsive
			$("#datatables-reponsive").DataTable({
				responsive: true,
				"order": [[ 1, "desc" ]]
			});
		});
	</script>



