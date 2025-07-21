<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="index.php">
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				<?php echo $userDetails->organizationname; ?> Portal
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