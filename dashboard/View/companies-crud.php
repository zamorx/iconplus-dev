

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Companies
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Companies">Companies</a></li>
								<li class="breadcrumb-item active" aria-current="companies"><?php echo $alm->companyid != null ? $alm->companyname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->companyid != null ? $alm->companyname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">
										<?php echo $alm->companyid != null ? 'Actualice el formulario editando el campo deseado.' : 'Complete el formulario llenando todos los campos solicitados.'; ?>
									</h6>
								</div>
								<div class="card-body">
									<form action="?c=Companies&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="companyid" value="<?php echo $alm->companyid; ?>" />
										<div class="row">
										<div class="mb-3 col-lg-6">
											<label class="form-label">Company Name</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-tag"></i></span>		
												<input type="text-box" name="companyname" value="<?php echo $alm->companyname; ?>" class="form-control" placeholder="Enter company name">
											</div>
										</div>
										<div class="mb-3 col-lg-6">
											<label class="form-label">Company RUC</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-barcode"></i></span>		
												<input type="text-box" name="companyruc" value="<?php echo $alm->companyruc; ?>" class="form-control" placeholder="Enter company RUC">
											</div>
										</div>
										<div class="mb-3 col-lg-6">
											<label class="form-label">Company Address</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-map-marker-alt"></i></span>		
												<input type="text-box" name="companyaddress" value="<?php echo $alm->companyaddress; ?>" class="form-control" placeholder="Enter company address">
											</div>
										</div>
										<div class="mb-3 col-lg-6">
											<label class="form-label">Company City</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-city"></i></span>		
												<input type="text-box" name="companycity" value="<?php echo $alm->companycity; ?>" class="form-control" placeholder="Enter company city">
											</div>
										</div>
										<div class="mb-3 col-lg-6">
											<label class="form-label">Company Country</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-map-marked-alt"></i></span>		
												<input type="text-box" name="companycountry" value="<?php echo $alm->companycountry; ?>" class="form-control" placeholder="Enter company country">
											</div>
										</div>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
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
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Angelica Ramos</h5>
								</div>
								<div class="card-body">
									<div class="row g-0">
										<div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
											<img src="Assets/img/avatars/avatar.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
										</div>
										<div class="col-sm-9 col-xl-12 col-xxl-8">
											<strong>About me</strong>
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
												sociis
												natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
										</div>
									</div>

									<table class="table table-sm my-2">
										<tbody>
											<tr>
												<th>Name</th>
												<td>Charissa Hilt</td>
											</tr>
											<tr>
												<th>Company</th>
												<td>Matrix Interior Design</td>
											</tr>
											<tr>
												<th>Occupation</th>
												<td>Desktop publisher</td>
											</tr>
											<tr>
												<th>Email</th>
												<td>charissahilt@rhyta.com</td>
											</tr>
											<tr>
												<th>Phone</th>
												<td>+1234123123123</td>
											</tr>
											<tr>
												<th>Website</th>
												<td>hispanomarketer.com</td>
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