
			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Seguridad
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Seguridad</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-8">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Seguridad</h5>
									<h6 class="card-subtitle text-muted">Lista de programas de seguridad para Windows y macOS, Seleccione y haga clic en el botón de descarga para comenzar.</h6>
								</div>
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Program Name</th>
											<th class="downloads">Actions</th>
											
										</tr>
									</thead>
									<tbody>
										<?php foreach ($this->model->Listar() as $r) : ?>
											<? if ($r->categoryid == 3) : ?>	
										<tr>
											<td>
												<img src="Assets/img/logos/<?php echo $r->osname; ?>.jpg" width="48" height="48" class="rounded-circle me-2" alt="Avatar">
												<?php echo $r->downloadname; ?>
											</td>
											<td class="downloads">
												<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical align-middle"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="<?php echo $r->downloadpath; ?>">Download file</a>
												<a class="dropdown-item" href="?c=Downloads&a=Crud&downloadid=<?php echo $r->downloadid; ?>">Update</a>
												<a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this item?');" href="?c=Downloads&a=Eliminar&downloadid=<?php echo $r->downloadid; ?>">Delete</a>
											</div>
										</div>
											</td>
											
										</tr>
										<? endif; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							
						</div>

						<div class="col-xxl-4">
							<div class="card">
								<img class="card-img-top" src="Assets/img/photos/security.jpg" alt="Security">
								<div class="card-header">
									<h5 class="card-title mb-0">ESET antivirus softwares</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Antivirus protection safeguards your devices against malware, viruses, and cyber threats, ensuring data security and system stability.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>