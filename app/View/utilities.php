
<!-- Inicia Main content -->

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Utilitarios
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="utilities">Utilitarios</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-8">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Utilitarios</h5>
									<h6 class="card-subtitle text-muted">Lista de programas utilitarios para Windows y macOS, Seleccione y haga clic en el botón de descarga para comenzar.</h6>
								</div>
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>Nombre de Software</th>
											<th class="downloads">Acciones</th>
											
										</tr>
									</thead>
									<tbody>
										<?php foreach ($this->model->Listar() as $r) : ?>
											<?php if ($r->categoryid == 5) : ?>	
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
												<a class="dropdown-item" href="<?php echo $r->downloadpath; ?>">Descargar archivo</a>
												<a class="dropdown-item" href="?c=Downloads&a=Crud&downloadid=<?php echo $r->downloadid; ?>">Actualizar</a>
												<a class="dropdown-item" onclick="return confirm('¿Está seguro que desea eliminar este registro?');" href="?c=Downloads&a=Eliminar&downloadid=<?php echo $r->downloadid; ?>">Eliminar</a>
											</div>
										</div>
											</td>
											
										</tr>
										<?php endif; ?>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							
						</div>

						<div class="col-xxl-4">
							<div class="card">
								<img class="card-img-top" src="Assets/img/photos/utilities.jpg" alt="Utilities">
								<div class="card-header">
									<h5 class="card-title mb-0">Softwares utilities</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Software utilities are specialized programs designed to help manage, maintain, and optimize computer system performance.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<!-- Termina Main content -->
