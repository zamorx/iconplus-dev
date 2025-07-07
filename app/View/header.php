<?php
require_once('../login/config.php');
require_once('../login/session.php');
$userDetails = $userClass->userDetails($session_uid);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iconPlus Portal</title>
    <link rel="stylesheet" href="Assets/css/modern.css">
    <script src="Assets/js/app.js"></script>
    <script src="Assets/js/settings.js"></script>
	<script src="js/settings.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
	
	
	<style>
		body {
			opacity: 0;
		}
	</style>
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120946860-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120946860-7');
</script>

</head>

<!-- Inicia el Body-->

<body>
    <div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="index.php">
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				iconPlus Portal
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="Assets/img/avatars/<?php echo $userDetails->username; ?>.jpg" class="img-fluid rounded-circle mb-2" alt="<?php echo $userDetails->fname; ?>">
					<div class="fw-bold"><?php echo $userDetails->fname; ?> <?php echo $userDetails->lname; ?></div>
					<small><?php echo $userDetails->loginoccupation; ?></small>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
                    </li>
					<!-- Menu de Navegacion -->
					<li class="sidebar-item active">
						<a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
							<i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
						</a>
						
						<ul id="pages" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Activators">Activadores</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Ofimatic">Ofimatica</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Security">Seguridad</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Support">Soporte</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Utilities">Utilitarios</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Downloads&a=Crud">Nuevo registro <span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
							
						</ul>
						
					</li>
					<?php if ($userDetails->idrol == 1) : ?>
					<!-- Menu de Companies -->
					 <li class="sidebar-item active">
						<a data-bs-target="#companies" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
							<i class="align-middle me-2 fas fa-fw fa-city"></i> <span class="align-middle">Compañías</span>
						</a>
						<ul id="companies" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Companies">Ver registros</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Companies&a=Crud">Nuevo registro<span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
						</ul>
					</li>
					
					<!-- Menu de Users -->
					<li class="sidebar-item active">
						<a data-bs-target="#users" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
							<i class="align-middle me-2 fas fa-fw fa-users"></i> <span class="align-middle">Usuarios</span>
						</a>
						<ul id="users" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Users">Ver registros</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Users&a=Crud">Nuevo registro<span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
						</ul>
					</li>
					<!-- Menu de Invoices -->
					 <li class="sidebar-item active">
						<a data-bs-target="#invoices" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
							<i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Facturas</span>
						</a>
						<ul id="invoices" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Invoices">Ver registros</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Invoices&a=Crud">Nuevo registro<span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
						</ul>
					</li>

					<!-- Menu de Logins -->

					<li class="sidebar-item active">
						<a data-bs-target="#logins" data-bs-toggle="collapse" class="sidebar-link" aria-expanded="true">
							<i class="align-middle me-2 fas fa-fw fa-users"></i> <span class="align-middle">Logins</span>
						</a>
						<ul id="logins" class="sidebar-dropdown list-unstyled collapse show" data-bs-parent="#sidebar">
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Logins">Ver registros</a></li>
							<li class="sidebar-item"><a class="sidebar-link" href="?c=Logins&a=Crud">Nuevo registro<span class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
						</ul>
					</li>


					<?php endif; ?>
				</ul>
			</div>
		</nav>
		<div class="main">
			<nav class="navbar navbar-expand navbar-theme">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<input class="form-control form-control-lite" type="text" placeholder="Search projects...">
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-envelope-open"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 Nuevos Mensajes
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="Assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle" alt="Michelle Bilodeau">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Michelle Bilodeau</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">5m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="Assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle" alt="Kathie Burton">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Kathie Burton</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="Assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle" alt="Alexander Groves">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Alexander Groves</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="Assets/img/avatars/avatar.jpg" class="avatar img-fluid rounded-circle" alt="Daisy Seger">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Daisy Seger</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Mostrar todos los mensajes</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-bell"></i>
								<span class="indicator"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-danger fas fa-fw fa-bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Actualización completada </div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-warning fas fa-fw fa-envelope-open"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">6h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-primary fas fa-fw fa-building"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.1</div>
												<div class="text-muted small mt-1">8h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Anna accepted your request.</div>
												<div class="text-muted small mt-1">12h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Mostrar todas las botificaciones</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-2">
							<a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown" data-bs-toggle="dropdown">
								<i class="align-middle fas fa-cog"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i> Ver Perfil </a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-comments"></i> Contactos</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-chart-pie"></i> Analítica</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo BASE_URL; ?>logout.php"><i class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i> Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>