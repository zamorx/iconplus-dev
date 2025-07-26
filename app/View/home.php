			<?php include 'includes/home-tools.php' ;?>
			
			<main class="content">
				<div class="container-fluid">
					<div class="header">
						<h1 class="header-title">	
							Welcome back, <?php echo $userDetails->fname; ?>!
						</h1>
						<p class="header-subtitle">You have 24 new messages and 5 new notifications.</p>
					</div>
					<div class="row">
						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Recent Movement</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Impuestos este Mes</h5>
													</div>

													<div class="col-auto">
														<div class="avatar">
															<div class="avatar-title rounded-circle bg-primary-dark">
																<i class="align-middle" data-feather="calendar"></i>
															</div>
														</div>
													</div>
												</div>
												<h1 class="display-5 mt-1 mb-3"><?php $currentiva = number_format($currentiva, 2);  echo "C$". $currentiva; ?></h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i><?php $lastiva = number_format($lastiva, 2);  echo "C$". $lastiva; ?></span>
													Mes anterior
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Usuarios Registrados</h5>
													</div>

													<div class="col-auto">
														<div class="avatar">
															<div class="avatar-title rounded-circle bg-primary-dark">
																<i class="align-middle" data-feather="users"></i>
															</div>
														</div>
													</div>
												</div>
												<h1 class="display-5 mt-1 mb-3"><?php echo $total; ?></h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> <?php echo round($billing, 2); ?>%</span>
													<?php echo $useractive; ?> Usuarios de facturación
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Ingreso Total este Mes</h5>
													</div>

													<div class="col-auto">
														<div class="avatar">
															<div class="avatar-title rounded-circle bg-primary-dark">
																<i class="align-middle" data-feather="dollar-sign"></i>
															</div>
														</div>
													</div>
												</div>
												<h1 class="display-5 mt-1 mb-3"><?php $currentincome = number_format($currentincome, 2);  echo "C$". $currentincome; ?></h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> <?php $lastincome = number_format($lastincome, 2);  echo "C$". $lastincome; ?> </span>
													Mes anterior
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Facturas Pendientes</h5>
													</div>

													<div class="col-auto">
														<div class="avatar">
															<div class="avatar-title rounded-circle bg-primary-dark">
																<i class="align-middle" data-feather="file"></i>
															</div>
														</div>
													</div>
												</div>
												<h1 class="display-5 mt-1 mb-3"><?php echo $pending;?></h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i><?php $pendingammount = number_format($pendingammount, 2);  echo "C$". $pendingammount; ?></span>
													Monto total pendiente
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Latest Projects</h5>
								</div>
								<table id="datatables-dashboard-projects" class="table table-striped my-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Nombre de empresa</th>
											<th class="d-none d-xl-table-cell">Emisión</th>
											<th class="d-none d-xl-table-cell">Vencimiento</th>
											<th>Estado</th>
											<th class="d-none d-md-table-cell">Servicio</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($this->model->listInvoices() as $r) : ?>
											<?php if ($r->invoiceactive == 1 && $r->invoicestatus < 2) : ?>
										<tr>
										
											<td><?php echo $r->invoiceid ?></td>
											<td><?php echo $r->companyname ?></td>
											<td class="d-none d-xl-table-cell"><?php echo $r->invoicedate = date('d-m-Y', strtotime($r->invoicedate)); ?>	</td>
											<td class="d-none d-xl-table-cell"><?php echo $r->invoicedate = date('d-m-Y', strtotime($r->invoicedate.'+15 days')); ?></td>
											<td><?php if ($r->invoiceactive == 1) : ?>
													<?php if ($r->invoicestatus == 2) : ?>
														<span class="badge bg-success">Pagada</span>
													<?php elseif ($r->invoicestatus == 1) : ?>
														<span class="badge bg-warning">Pendiente</span>
													<?php elseif ($r->invoicestatus == 0):?>
														<span class="badge bg-secondary">Creada</span>
													<?php endif; ?>
											<?php else : ?>
													<span class="badge bg-danger">Eliminada</span>
											<?php endif; ?></td>
											<td class="d-none d-md-table-cell"><?php echo $r->invoiceservice ?></td>
											
										</tr>
										<?php endif; ?> 
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Ingreso Mensual</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>				
					</div>
					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Current Visitors</h5>
								</div>
								<div class="card-body px-4">
									<div id="world_map" style="height:350px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100">
								<div class="card-header">
									<div class="card-actions float-end">
										<a href="#" class="me-1">
											<i class="align-middle" data-feather="refresh-cw"></i>
										</a>
										<div class="d-inline-block dropdown show">
											<a href="#" data-bs-toggle="dropdown" data-bs-display="static">
												<i class="align-middle" data-feather="more-vertical"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
									<h5 class="card-title mb-0">Browser Usage</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>
										<table class="table mb-0">
											<tbody>
												<tr>
													<td><i class="fas fa-circle text-primary fa-fw"></i> Chrome</td>
													<td class="text-end">4401</td>
												</tr>
												<tr>
													<td><i class="fas fa-circle text-warning fa-fw"></i> Firefox</td>
													<td class="text-end">4003</td>
												</tr>
												<tr>
													<td><i class="fas fa-circle text-danger fa-fw"></i> IE</td>
													<td class="text-end">1589</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						
					</div>	
				</div>
			</main>

			<script src="Assets/js/charts.js"></script>