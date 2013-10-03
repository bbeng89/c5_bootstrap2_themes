<?php defined('C5_EXECUTE') or die(_('Access Denied')); ?>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container-fluid">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="<?=$this->url("");?>"><?php echo SITE; ?></a>
			<div class="nav-collapse collapse">
				<?php 
					$a = new GlobalArea("Top Navigation");
					$a->setBlockLimit(1);
					$a->display($c);
				?>
				<div class="navbar-text pull-right">
					<?php
						$u = new User();
						if($u->checkLogin()):
					?>
						<span>Logged in as <?=$u->getUserName();?></span>
					<?php else: ?>
						<a href="<?php echo $this->url('/login')?>">Login <i class="icon-signin"></i></a>
					<?php endif; ?>
				</div>
			</div><!--/.nav-collapse -->
		</div>
	</div>
</div>