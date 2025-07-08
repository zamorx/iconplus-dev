

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Logins
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Logins">Logins</a></li>
								<li class="breadcrumb-item active" aria-current="logins"><?php echo $alm->uid != null ? $alm->fname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">
						<!-- Actualizar Form Card -->
						<?php if ($alm->uid > 0) : ?>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->uid != null ? $alm->fname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">Actualice el formulario editando el campo deseado.</h6>
								</div>
								<div class="card-body">

									<form action="?c=Logins&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="uid" value="<?php echo $alm->uid; ?>" />


										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Nombre</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-address-card"></i></span>
													<input type="text-box" name="fname" value="<?php echo $alm->fname; ?>" class="form-control" placeholder="Enter firts name">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Apellido</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-plus"></i></span>
													<input type="text-box" name="lname" value="<?php echo $alm->lname; ?>" class="form-control" placeholder="Enter last name">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Username</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-at"></i></span>
													<input type="text-box" name="username" value="<?php echo $alm->username; ?>" class="form-control" placeholder="Enter a username">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Email</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-envelope"></i></span>
													<input type="text-box" name="email" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Enter email">
												</div>
											</div>
										</div>
										
											<div class="row">
												<div class="mb-3 col-md-6">
												<label class="form-label">Nombre de compañia</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-building"></i></span>										
												<select id="companyid" name="companyid" value="<?php echo $alm->companyname; ?>" class="form-control">
                                    				<option value="<?php echo $alm->companyid; ?>"><?php echo $alm->uid != null ? $alm->companyname : 'Select company name'; ?></option>
                                    				<?php foreach ($this->model->ListCompanies() as $r) : ?>
                                        				<option value="<?php echo $r->companyid?>"><?php echo $r->companyname; ?></option>
                                    				<?php endforeach ?>
                                				</select>
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Role</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-user-cog"></i></span>
												<select id="idrol" name="idrol" value="<?php echo $alm->namerol; ?>" class="form-control">
                                    				<option value="<?php echo $alm->idrol; ?>"><?php echo $alm->uid != null ? $alm->namerol : 'Seleccione un role'; ?></option>
                                    				<?php foreach ($this->model->ListRole() as $r) : ?>
                                        				<option value="<?php echo $r->idrol?>"><?php echo $r->namerol; ?></option>
                                    				<?php endforeach ?>
                                				</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Ocupación</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-user-tie"></i></span>	
													<input type="text-box" name="loginoccupation" value="<?php echo $alm->loginoccupation; ?>" class="form-control" placeholder="Enter a occupation">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Teléfono</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-phone"></i></span>
													<input type="text-box" name="loginphone" value="<?php echo $alm->loginphone; ?>" class="form-control" placeholder="Enter phone number">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="mb-3">
												<label class="form-label">Acerca de mi</label>
												<textarea name="aboutme" class="form-control" placeholder="Write somthing about you" rows="5" ><?php echo $alm->aboutme; ?></textarea>
											</div>
										</div>	
										
										<button type="submit" onclick="return confirm('¿Está seguro que desea modificar este registro?');" class="btn btn-primary">Actualizar</button>
									</form>
								</div>
							</div>

						<!-- End Actualizar Form Card -->

						<!-- Register Form Card -->
						<?php else: ?>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->uid != null ? $alm->fname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">Complete el formulario llenando todos los campos solicitados.</h6>
								</div>
								<div class="card-body">

									<form action="?c=Logins&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="uid" value="<?php echo $alm->uid; ?>" />


										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Nombre</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-address-card"></i></span>
													<input type="text-box" name="fname" value="<?php echo $alm->fname; ?>" class="form-control" placeholder="Enter firts name">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Apellido</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-plus"></i></span>
													<input type="text-box" name="lname" value="<?php echo $alm->lname; ?>" class="form-control" placeholder="Enter last name">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Username</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-at"></i></span>
													<input type="text-box" name="username" value="<?php echo $alm->username; ?>" class="form-control" placeholder="Enter a username">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Email</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-envelope"></i></span>
													<input type="text-box" name="email" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Enter email">
												</div>
											</div>
										</div>
										
											<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Password</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-key"></i></span>
													<input type="password" name="password" value="<?php echo $alm->password; ?>" class="form-control" placeholder="Enter password">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Role</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-user-cog"></i></span>
												
												<select id="idrol" name="idrol" value="<?php echo $alm->idrol; ?>" class="form-control">
                                    				<option value="<?php echo $alm->idrol; ?>"><?php echo $alm->uid != null ? $alm->namerol : 'Seleccione un role'; ?></option>
                                    				<?php foreach ($this->model->ListRole() as $r) : ?>
                                        				<option value="<?php echo $r->idrol?>"><?php echo $r->namerol; ?></option>
                                    				<?php endforeach ?>
                                				</select>
												</div>

											<!--<input type="text-box" name="idrol" value="<?php echo $alm->idrol; ?>" class="form-control" placeholder="Enter role">-->
											</div>
										</div>
										<button type="submit" id="toastr-clear" class="btn btn-primary">Guardar</button>
									</form>
								</div>
							</div>
						<?php endif; ?>
						<!-- End Register Form Card -->
							
						</div>



						<!-- User Profile Card -->

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
											<strong>Sobre mi</strong>
											<p><?php echo $userDetails->aboutme; ?></p>
										</div>
									</div>

									<table class="table table-sm my-2">
										<tbody>
											<tr>
												<th>Nombre</th>
												<td><?php echo $userDetails->fname; ?> <?php echo $userDetails->lname; ?></td>
											</tr>
											<tr>
												<th>Compañía</th>
												<td><?php echo $userDetails->companyname; ?></td>
											</tr>
											<tr>
												<th>Cargo</th>
												<td><?php echo $userDetails->loginoccupation; ?></td>
											</tr>
											<tr>
												<th>Email</th>
												<td><?php echo $userDetails->email; ?></td>
											</tr>
											<tr>
												<th>Teléfono</th>
												<td><?php echo $userDetails->loginphone; ?></td>
											</tr>
											<tr>
												<th>Website</th>
												<td><?php echo $userDetails->companyweb; ?></td>
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