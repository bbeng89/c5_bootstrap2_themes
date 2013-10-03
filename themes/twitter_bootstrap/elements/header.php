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
			body{
				<?php 
					if($c->isEditMode()){
						echo "padding-top:150px;";
					} 
					else{
						echo "padding-top:60px;";
					}
				?>;
			}
			
			<?php 
				$p = new Permissions($c);
				if($p->canViewToolbar()): ?>
					.navbar-fixed-top{
						margin-top:50px;
						z-index:0;
				}
			<?php endif; ?>
		</style>
	</head>
	<body>
		<?php $this->inc('elements/topnav.php'); ?>
		<div class="container">