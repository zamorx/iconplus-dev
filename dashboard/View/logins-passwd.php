

			<main class="content">
				<div class="container-fluid">

					<div class="header">
						<h1 class="header-title">
							Logins
						</h1>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="?c=Logins">Logins</a></li>
								<li class="breadcrumb-item active" aria-current="logins"><?php echo $alm->uid != null ? $alm->fname  : 'Nuevo Registro'; ?></li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-xxl-9">
						<!-- Register Form Card -->
							<div class="card">
								<div class="card-header">
									<h5 class="card-title"><?php echo $alm->uid != null ? $alm->fname : 'Nuevo Registro'; ?></h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
								</div>
								<div class="card-body">

									<form id="validation-form" action="?c=Logins&a=PasswordChange" method="post" enctype="multipart/form-data">
                            			<input type="hidden" name="uid" value="<?php echo $alm->uid; ?>" />
											<div class="row">
											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Password</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-key"></i></span>
													<input type="password" name="password" class="form-control" placeholder="Enter your password">
												</div>
											</div>
											<div class="mb-3 col-md-6 error-placeholder">
												<label class="form-label">Verify password</label>
												<div class="input-group mb-3">
													<span class="input-group-text"><i class="align-middle me-1 fas fa-fw fa-key"></i></span>
													<input type="password" name="validation-password-confirmation" class="form-control" placeholder="Enter your password again">
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary">Submit</button>
									</form>
								</div>
							</div>
						
						<!-- End Register Form Card -->
							
						</div>

						<!-- User Profile Card -->

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
												<th>Company</th>
												<td><?php echo $userDetails->companyname; ?></td>
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
												<td><?php echo $userDetails->companyweb; ?></td>
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
			// Initialize validation
			$("#validation-form").validate({
				focusInvalid: false,
				rules: {
					"validation-email": {
						required: true,
						email: true
					},
					"password": {
						required: true,
						minlength: 6,
						maxlength: 20
					},
					"validation-password-confirmation": {
						required: true,
						minlength: 6,
						equalTo: "input[name=\"password\"]"
					},
					"validation-required": {
						required: true
					},
					"validation-url": {
						required: true,
						url: true
					}
				},
				// Errors
				errorPlacement: function errorPlacement(error, element) {
					var $parent = $(element).parents(".error-placeholder");
					// Do not duplicate errors
					if ($parent.find(".jquery-validation-error").length) {
						return;
					}
					$parent.append(
						error.addClass("jquery-validation-error small form-text invalid-feedback")
					);
				},
				highlight: function(element) {
					var $el = $(element);
					var $parent = $el.parents(".error-placeholder");
					$el.addClass("is-invalid");
					// Select2 and Tagsinput
					if ($el.hasClass("select2-hidden-accessible") || $el.attr("data-role") === "tagsinput") {
						$el.parent().addClass("is-invalid");
					}
				},
				unhighlight: function(element) {
					$(element).parents(".error-placeholder").find(".is-invalid").removeClass("is-invalid");
				}
			});
		});
	</script>

