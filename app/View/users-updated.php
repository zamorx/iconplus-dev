

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Usuarios
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="usuarios">Usuarios</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Usuarios</h5>
									<h6 class="card-subtitle text-muted">Lista de usuarios registrados en el sistema. Muestra información esencial como nombres, roles y detalles de contacto para una fácil administración y supervisión.</h6>
								</div>
								<table id="datatables-reponsive" class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Nombre Completo</th>
											<th>Cargo</th>
											<th>Email</th>
											<th>Teléfono</th>
											<th class="downloads">Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($this->model->Listar() as $r) : ?>
										<tr>
											<td>
												<img src="Assets/img/avatars/administrator.jpg" width="48" height="48" class="rounded-circle me-2" alt="<?php echo $r->fname; ?>">
												<?php echo $r->fname; ?>
											</td>
											<td><?php echo $r->userrol; ?></td>
											<td><?php echo $r->useremail; ?></td>
											<td><?php echo $r->userphone; ?></td>
											<td class="downloads"><div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="?c=Users&a=Crud&userid=<?php echo $r->userid; ?>">Actualizar</a>
												<a class="dropdown-item" onclick="return confirm('¿Está seguro que desea eliminar este registro?');" href="?c=Users&a=Eliminar&userid=<?php echo $r->userid; ?>">Eliminar</a>
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
						</div>
					</div>
				</div>
			</main>

			<script>
				document.addEventListener("DOMContentLoaded", function() {
				// Datatables Responsive
					$("#datatables-reponsive").DataTable({
					responsive: true
					});
				});
			</script>

			<input id="toastr-message" name="toastr-message" type="hidden" class="form-control" value="Usuario actualizado exitosamente!">

			<?php require_once 'View/includes/toastr-saved.php'; ?>