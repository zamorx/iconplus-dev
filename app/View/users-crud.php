

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Users
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Users">Users</a></li>
								<li class="breadcrumb-item active" aria-current="companies"><?php echo $alm->userid != null ? $alm->fname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->userid != null ? $alm->fname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">
										<?php echo $alm->userid != null ? 'Actualice el formulario editando el campo deseado.' : 'Complete el formulario llenando todos los campos solicitados.'; ?>
									</h6>
								</div>
								<div class="card-body">
									<form id="validation-form" action="?c=Users&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="userid" value="<?php echo $alm->userid; ?>" />	

										<div class="row">

											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Nombre de compañia</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-building"></i></span>										
													<select id="companyid" name="companyid" value="<?php echo $alm->companyid; ?>" class="form-control">
                                    				<option value="<?php echo $alm->companyid; ?>"><?php echo $alm->userid != null ? $alm->companyname : 'Select company name'; ?></option>
                                    				<?php foreach ($this->model->ListCompanies() as $r) : ?>
                                        				<option value="<?php echo $r->companyid?>"><?php echo $r->companyname; ?></option>
                                    				<?php endforeach ?>
                                				</select>
												</div>
											</div>

											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Billing config</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-user-check"></i></span>
													<select name="billinguser" id="billinguser" value="<?php echo $alm->billinguser; ?>" class="form-control">
														<option value="<?php echo $alm->billinguser; ?>">
															<?php if ($alm->userid != null): ?>
																<?php if ($alm->billinguser == 1): ?>
																	Opción activada
																	<option value="">Desactivar opción</option>
																<?php else: ?>
																	Opción desactivada
																	<option value="1">Activar opción</option>
																<?php endif; ?>
																
															<?php else: ?>
																Seleccione una opción
																<option value="1">Activar opción</option>
															<?php endif; ?>
														</option>
															
															
													</select>
												</div>
											</div>

										</div>

										<div class="row">
											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Nombre completo</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-address-card"></i></span>
													<input type="text-box" name="fname" value="<?php echo $alm->fname; ?>" class="form-control" placeholder="Enter full name">
												</div>
											</div>
											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Cargo</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-user-cog"></i></span>
													<input type="text-box" name="userrol" value="<?php echo $alm->userrol; ?>" class="form-control" placeholder="Enter a role">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Email</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-envelope"></i></span>
													<input type="text-box" name="useremail" value="<?php echo $alm->useremail; ?>" class="form-control" placeholder="Enter an email">
												</div>
											</div>
											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Teléfono</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-phone"></i></span>
													<input type="text-box" name="userphone" value="<?php echo $alm->userphone; ?>" class="form-control" placeholder="Enter a phone number">
												</div>
											</div>
										</div>
										<?php if ($alm->userid > 0) :?>
											<button type="submit" onclick="return confirm('¿Está seguro que desea modificar este registro?');" class="btn btn-primary" id="toastr-show">Actualizar</button>
										<?php else :?>
											<button type="submit" class="btn btn-primary" id="toastr-show">Guardar</button>
										<?php endif ?>
									</form>
								</div>
							</div>
							
						</div>

						<div class="col-xxl-3">
							<?php if ($alm->userid > 0):?>
							<div class="card">
								<img class="card-img-top" src="Assets/img/photos/splash-5.jpg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0"><?php echo $alm->companyname; ?></h5>
									<span><?php echo $alm->companyruc; ?></span>
									
									
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><?php echo $alm->companyaddress; ?></li>
									<li class="list-group-item"><?php echo $alm->companycity; ?>, <?php echo $alm->companycountry; ?></li>
									<li class="list-group-item"><?php echo $alm->companyweb; ?></li>
									<li class="list-group-item"><span class="badge bg-success">Active</span></li>
								</ul>
							</div>
							<?php else:?>

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
												<th>Organización</th>
												<td><?php echo $userDetails->organizationname; ?></td>
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
							<?php endif?>
						</div>
					</div>
				</div>
			</main>

			<?php require_once 'View/includes/toastr.php'; ?>