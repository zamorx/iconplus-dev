

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Categories
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Categories</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Categories</h5>
									<h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a
										<code>&lt;tbody&gt;</code>.</h6>
								</div>
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Company Name</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($this->model->Listar() as $r) : ?>
										<tr>
											<td>
												<img src="Assets/img/avatars/avatar.jpg" width="48" height="48" class="rounded-circle me-2" alt="Avatar">
												<?php echo $r->categoryname; ?>
											</td>
											<td><div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="?c=Categories&a=Crud&categoryid=<?php echo $r->categoryid; ?>">Update</a>
												<a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');" href="?c=Categories&a=Eliminar&categoryid=<?php echo $r->categoryid; ?>">Delete</a>
											</div>
										</div></td>
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