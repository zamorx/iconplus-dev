

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Descargas
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Descargas</a></li>
								<li class="breadcrumb-item"><a href="?c=Downloads">Descargas</a></li>
								<li class="breadcrumb-item active" aria-current="downloads"><?php echo $alm->downloadid != null ? $alm->downloadname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-8">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->downloadid != null ? $alm->downloadname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">
										<?php echo $alm->downloadid != null ? 'Actualice el formulario editando el campo deseado.' : 'Complete el formulario llenando todos los campos solicitados.'; ?>
									</h6>
								</div>
								<div class="card-body">
									<form id="validation-form" action="?c=Downloads&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="downloadid" value="<?php echo $alm->downloadid; ?>" />
										<div class="row">
										<div class="mb-3 col-md-6">
											<label class="form-label">Categoría</label>
											<div class="input-group mb-3 error-placeholder">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-folder"></i></span>
											<select id="categoryid" name="categoryid" value="<?php echo $alm->categoryid; ?>" class="form-control">
                                                <option value="<?php echo $alm->categoryid; ?>"><?php echo $alm->downloadid != null ? $alm->categoryname : 'Select a category'; ?></option>
                                                    <?php foreach ($this->model->ListCategory() as $r) : ?>
                                                <option value="<?php echo $r->categoryid ?>"><?php echo $r->categoryname; ?></option>
                                                    <?php endforeach ?>
                                            </select>
											</div>
										</div>
										<div class="mb-3 col-md-6">
											<label class="form-label">Plataforma</label>
											<div class="input-group mb-3 error-placeholder">
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
										<div class="mb-3 col-md-6 error-placeholder">
											<label class="form-label">Nombre de Software</label>
											<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-tag"></i></span>
												<input type="text-box" name="downloadname" value="<?php echo $alm->downloadname; ?>" class="form-control" placeholder="Enter software name">
											</div>
										</div>
										</div>


										<div class="mb-3 error-placeholder">
											<label class="form-label">Ruta AWS S3</label>
											<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-link"></i></span>
													<input type="text-box" name="downloadpath" value="<?php echo $alm->downloadpath; ?>" class="form-control" placeholder="Enter download path">
											</div>
										</div>
										
										<?php if ($alm->downloadid > 0) :?>
											<button type="submit" onclick="return confirm('¿Está seguro que desea modificar este registro?');" class="btn btn-primary">Actualizar</button>
										<?php else :?>
											<button type="submit" class="btn btn-primary">Guardar</button>
										<?php endif ?>
									</form>
								</div>
							</div>
							
						</div>

						<div class="col-xxl-4">
							<div class="card">
								<img class="card-img-top" src="Assets/img/photos/splash-6.jpg" alt="Activators">
								<div class="card-header">
									<h5 class="card-title mb-0">Amazon Web Services</h5>
								</div>
								<div class="card-body">
									<p class="card-text">AWS S3, or Amazon Simple Storage Service, is a cloud-based object storage service offered by Amazon Web Services (AWS). It allows users to store and retrieve any amount of data, from anywhere, via the internet. S3 is highly scalable, durable, and secure, making it suitable for various use cases like data storage, backups, data lakes, and website hosting</p>
									<a target="_blank" href="https://aws.amazon.com/s3/" class="btn btn-primary">Ir a AWS S3</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<script src="Assets/js/validation-forms.js"></script>