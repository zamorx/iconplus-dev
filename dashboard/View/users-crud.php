

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

											<div class="mb-3 col-md-6">
												<label class="form-label">Billing config</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-user-check"></i></span>
													<select name="defaultuser" id="defaultuser" value="<?php echo $alm->defaultuser; ?>" class="form-control">
														<?if($alm->userid == $alm->defaultuser):?>
															<option value="1" selected>Billing user enable</option>
														<?else:?>
															<option value="0" selected>Billing user disable</option>
														<?endif;?>
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
								<img class="card-img-top" src="Assets/img/photos/splash-5.jpg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0"><?php echo $alm->companyname; ?></h5>
								</div>
								<ul class="list-group list-group-flush">
									<li class="list-group-item"><?php echo $alm->companyaddress; ?></li>
									<li class="list-group-item"><?php echo $alm->companycity; ?>, <?php echo $alm->companycountry; ?></li>
									<li class="list-group-item"><span class="badge bg-success">Active</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</main>