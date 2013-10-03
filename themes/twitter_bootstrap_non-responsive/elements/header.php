<?php defined('C5_EXECUTE') or die(_('Access Denied')); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php Loader::element('header_required'); ?>
		<link href="<?=$this->getThemePath()?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=$this->getThemePath()?>/assets/css/font-awesome.min.css" rel="stylesheet">
		<style>
			<?php 
				$p = new Permissions($c);
				if($p->canViewToolbar()): ?>
					body{
						margin-top:30px;
					}
			<?php endif; ?>
		</style>
	</head>
	<body>
		<?php /*If using the fixed_topnav it needs to go here (outside container)*/ ?>
		<div class="container">
			<?php $this->inc('elements/topnav.php'); ?>