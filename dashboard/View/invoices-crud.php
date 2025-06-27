

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Invoices
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Invoices">Invoices</a></li>
								<li class="breadcrumb-item active" aria-current="invoices"><?php echo $alm->invoiceid != null ? $alm->invoiceservice  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->invoiceid != null ? $alm->invoiceservice : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
								</div>
								<div class="card-body">
									<form action="?c=Invoices&a=Guardar" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="invoiceid" value="<?php echo $alm->invoiceid; ?>" />
										<div class="row">

											<div class="mb-3 col-md-6">
												<label class="form-label">Company name</label>	
												
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 far fa-fw fa-building"></i></span>
													<select id="companyid" name="companyid" value="<?php echo $alm->companyname; ?>" class="form-control">
                                    				<option value="<?php echo $alm->companyid; ?>"><?php echo $alm->invoiceid != null ? $alm->companyname : 'Select company name'; ?></option>
                                    				<?php foreach ($this->model->ListCompanies() as $r) : ?>
                                        				<option value="<?php echo $r->companyid?>"><?php echo $r->companyname; ?></option>
                                    				<?php endforeach ?>
                                				</select>
												</div>
												
											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Date</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 far fa-fw fa-calendar-plus"></i></span>
												<input type="date" name="invoicedate" value="<?php echo $alm->invoicedate; ?>" class="form-control" placeholder="Enter date">
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Service name</label>
											<div class="input-group mb-3">
												<span class="input-group-text"><i class="align-middle me-1 far fa-fw fa-keyboard"></i></span>
												<input type="text-box" name="invoiceservice" value="<?php echo $alm->invoiceservice; ?>" class="form-control" placeholder="Enter service name">
											</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Service description</label>
											
											<textarea id="servicedescription" name="servicedescription" class="form-control" placeholder="Enter a service description"><?php echo $alm->servicedescription; ?></textarea>
										</div>
										<div class="row">
											<div class="mb-3 col-md-6"> 
												<label class="form-label">Service price</label>


												<div class="input-group mb-3">
													<span class="input-group-text">C$</span>
													<input type="text-box" name="serviceprice" value="<?php echo $alm->serviceprice; ?>" class="form-control" placeholder="e.g. 3500.00">
												</div>

											</div>
											<div class="mb-3 col-md-6">
												<label class="form-label">Service quantity</label>

												<div class="input-group mb-3">
													<span class="input-group-text">Qty</span>
													<input type="text-box" name="serviceqty" value="<?php echo $alm->serviceqty; ?>" class="form-control" placeholder="e.g. 10">
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
									<h5 class="card-title mb-0">Billing information</h5>
								</div>
								<div class="card-body">
									<div class="row g-0">
										<div class="col-sm-3 col-xl-12 col-xxl-4 text-center">
											<img src="Assets/img/avatars/administrator.jpg" width="64" height="64" class="rounded-circle mt-2" alt="Angelica Ramos">
										</div>
										<div class="col-sm-9 col-xl-12 col-xxl-8">
											<strong>Billing user</strong>
											<p><?php echo $alm->fname; ?></p>
										</div>
									</div>

									<table class="table table-sm my-2">
										<tbody>
											<tr>
												<th>Company</th>
												<td><?php echo $alm->companyname; ?></td>
											</tr>
											<tr>
												<th>Occupation</th>
												<td><?php echo $alm->userrol; ?></td>
											</tr>
											<tr>
												<th>Email</th>
												<td><?php echo $alm->useremail; ?></td>
											</tr>
											<tr>
												<th>Phone</th>
												<td><?php echo $alm->userphone; ?></td>
											</tr>
											<tr>
												<th>Website</th>
												<td><?php echo $alm->companyweb; ?></td>
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
    ClassicEditor
        .create(document.querySelector('#servicedescription'), {
			toolbar: ['bold', 'italic', 'bulletedList', 'numberedList']
		})
        .then(editor => { console.log(editor); })
        .catch(error => { console.error(error); });
</script>