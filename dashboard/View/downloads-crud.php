

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Downloads
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Downloads">Downloads</a></li>
								<li class="breadcrumb-item active" aria-current="downloads"><?php echo $alm->downloadid != null ? $alm->downloadname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->downloadid != null ? $alm->downloadname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
								</div>
								<div class="card-body">
									<form action="?c=Downloads&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="downloadid" value="<?php echo $alm->downloadid; ?>" />
										<div class="row">
										<div class="mb-3 col-md-6">
											<label class="form-label">Category Name</label>
											<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-folder"></i></span>
											<select id="categoryid" name="categoryid" value="<?php echo $alm->categoryname; ?>" class="form-control">
                                                <option value="<?php echo $alm->categoryid; ?>"><?php echo $alm->downloadid != null ? $alm->categoryname : 'Select a category'; ?></option>
                                                    <?php foreach ($this->model->ListCategory() as $r) : ?>
                                                <option value="<?php echo $r->categoryid ?>"><?php echo $r->categoryname; ?></option>
                                                    <?php endforeach ?>
                                            </select>
											</div>
										</div>
										<div class="mb-3 col-md-6">
											<label class="form-label">Platform</label>
											<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-laptop"></i></span>
											<select name="osname" id="osname" class="form-control" value="<?php echo $alm->osname; ?>">
												<option value="<?php echo $alm->osname; ?>"><?php echo $alm->osname != null ? $alm->osname : 'Select a platform'; ?></option>
												<option value="windows">Windows</option>
												<option value="linux">Linux</option>
												<option value="apple">Apple</option>
												<option value="office">Office</option>
												<option value="adobe">Adobe</option>
											</select>
											</div>
										</div>
										<div class="mb-3 col-md-6">
											<label class="form-label">Software Name</label>
											<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-tag"></i></span>
												<input type="text-box" name="downloadname" value="<?php echo $alm->downloadname; ?>" class="form-control" placeholder="Enter software name">
											</div>
										</div>
										</div>
										
										
										<div class="mb-3">
											<label class="form-label">Download Path</label>
											<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-link"></i></span>
													<input type="text-box" name="downloadpath" value="<?php echo $alm->downloadpath; ?>" class="form-control" placeholder="Enter download path">
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
												<th>category</th>
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