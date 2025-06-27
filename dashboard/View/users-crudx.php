

			<main class="content">
				<div class="container-fluserid">

					<div class="header">
						<h1 class="header-title">
							Users
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Users">Users</a></li>
								<li class="breadcrumb-item active" aria-current="users"><?php echo $alm->userid != null ? $alm->fname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->userid != null ? $alm->fname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
								</div>
								<div class="card-body">
									<form action="?c=Users&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="userid" value="<?php echo $alm->userid; ?>" />	

										<div class="row">

											<div class="mb-3 col-md-6">
												<label class="form-label">Nombre de compañia</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-building"></i></span>										
												<select id="companyid" name="companyid" value="<?php echo $alm->companyname; ?>" class="form-control">
                                    				<option value="<?php echo $alm->companyid; ?>"><?php echo $alm->userid != null ? $alm->companyname : 'Select company name'; ?></option>
                                    				<?php foreach ($this->model->ListCompanies() as $r) : ?>
                                        				<option value="<?php echo $r->companyid?>"><?php echo $r->companyname; ?></option>
                                    				<?php endforeach ?>
                                				</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Nombre completo</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-address-card"></i></span>
													<input type="text-box" name="fname" value="<?php echo $alm->fname; ?>" class="form-control" placeholder="Enter full name">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Cargo</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-user-cog"></i></span>
													<input type="text-box" name="userrol" value="<?php echo $alm->userrol; ?>" class="form-control" placeholder="Enter a role">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="mb-3 col-md-6">
												<label class="form-label">Email</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-envelope"></i></span>
													<input type="text-box" name="useremail" value="<?php echo $alm->useremail; ?>" class="form-control" placeholder="Enter an email">
												</div>
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Teléfono</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-phone"></i></span>
													<input type="text-box" name="userphone" value="<?php echo $alm->userphone; ?>" class="form-control" placeholder="Enter a phone number">
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