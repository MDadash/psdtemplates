<?php wp_head() ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PSDTemplates</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md navbar-dark">
				<a class="navbar-brand d-md-none" href="#">Navigation</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php wp_nav_menu( array(
					'menu'            => 'navbar', 
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNav',
					'menu_class'      => 'navbar-nav',
					'menu_id'         => ' '
					) ); ?>
			</nav>
		</div>
	</header>