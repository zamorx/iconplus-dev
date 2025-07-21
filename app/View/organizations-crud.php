

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Settings
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="#">Organización</a></li>
								<li class="breadcrumb-item active" aria-current="companies"><?php echo $alm->organizationid != null ? $alm->organizationname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->organizationid != null ? $alm->organizationname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">
										<?php echo $alm->organizationid != null ? 'Actualice el formulario editando el campo deseado.' : 'Complete el formulario llenando todos los campos solicitados.'; ?>
									</h6>
								</div>
								<div class="card-body">
									<form id="validation-form" action="?c=Organizations&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="organizationid" value="<?php echo $alm->organizationid; ?>" />
										<div class="row">
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">Nombre de Organización</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-tag"></i></span>		
												<input type="text-box" name="organizationname" value="<?php echo $alm->organizationname; ?>" class="form-control" placeholder="Enter organization name">
											</div>
										</div>
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">Employer Identification Number</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-barcode"></i></span>		
												<input type="text-box" name="organizationruc" value="<?php echo $alm->organizationruc; ?>" class="form-control" placeholder="This field is optional">
											</div>
										</div>
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">Dirección</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-map-marker-alt"></i></span>		
												<input type="text-box" name="organizationaddress" value="<?php echo $alm->organizationaddress; ?>" class="form-control" placeholder="Enter organization address">
											</div>
										</div>
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">Ciudad, Estado Zipcode</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-city"></i></span>		
												<input type="text-box" name="organizationstate" value="<?php echo $alm->organizationstate; ?>" class="form-control" placeholder="e.g. MIAMI, FL 33138">
											</div>
										</div>
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">País</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-map-marked-alt"></i></span>		
												<input type="text-box" name="organizationcountry" value="<?php echo $alm->organizationcountry; ?>" class="form-control" placeholder="Enter organization country">
											</div>
										</div>
										
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">Sitio Web</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-globe"></i></span>		
												<input type="text-box" name="organizationweb" value="<?php echo $alm->organizationweb; ?>" class="form-control" placeholder="Enter organization website">
											</div>
										</div>
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">Teléfono</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-phone"></i></span>		
												<input type="text-box" name="organizationphone" value="<?php echo $alm->organizationphone; ?>" class="form-control" placeholder="Enter organization phone number">
											</div>
										</div>
										<div class="mb-3 col-lg-6 error-placeholder">
											<label class="form-label">Email</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-envelope"></i></span>		
												<input type="email" name="organizationemail" value="<?php echo $alm->organizationemail; ?>" class="form-control" placeholder="Enter organization email">
											</div>
										</div>
											
										</div>
										<?php if ($alm->organizationid > 0) :?>
											<button type="submit" onclick="return confirm('¿Está seguro que desea modificar este registro?');" class="btn btn-primary" id="toastr-show">Actualizar</button>
										<?php else :?>
											<button type="submit" class="btn btn-primary" id="toastr-show">Siguiente</button>
										<?php endif ?>

									</form>
								</div>
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
												<a class="dropdown-item" href="#">Acciones</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">About Us</h5>
								</div>
								<div class="card-body">
									<div class="row g-0">
										<div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
											<img src="Assets/img/logos/company.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
										</div>
										<div class="col-sm-9 col-xl-12 col-xxl-8">
											<strong>ICON PLUS S.A.</strong>
											<p>Somos un equipo de profesionales con amplia experiencia, dedicados a ayudar a las empresas a optimizar su infraestructura tecnológica y alcanzar sus objetivos. Ofrecemos una amplia gama de servicios de consultoría IT.</p>
										</div>
									</div>

									<table class="table table-sm my-2">
										<tbody>
											<tr>
												<th>Gerente general</th>
												<td>Carlos Zamora</td>
											</tr>
											<tr>
												<th>Vice Gerente</th>
												<td>Jorge Zamora</td>
											</tr>
											<tr>
												<th>Occupation</th>
												<td>Desktop publisher</td>
											</tr>
											<tr>
												<th>Email</th>
												<td>info@iconplus.net</td>
											</tr>
											<tr>
												<th>Phone</th>
												<td>+505 8216-7715</td>
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

			<?php require_once 'View/includes/toastr.php'; ?>