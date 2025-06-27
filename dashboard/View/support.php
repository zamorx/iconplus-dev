

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Soporte
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/dashboard-default">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Soporte</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-8">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Soporte</h5>
									<h6 class="card-subtitle text-muted">Add <code>.table-hover</code> to enable a hover state on table rows within a
										<code>&lt;tbody&gt;</code>.</h6>
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
											<? if ($r->categoryid == 4) : ?>	
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
								<img class="card-img-top" src="Assets/img/photos/support.jpg" alt="Support">
								<div class="card-header">
									<h5 class="card-title mb-0">Technical support softwares</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Technical support software helps businesses manage, track, and resolve customer issues efficiently through tools like ticketing systems and live chat.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>