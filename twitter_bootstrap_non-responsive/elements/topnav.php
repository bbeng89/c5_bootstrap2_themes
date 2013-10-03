<?php defined('C5_EXECUTE') or die(_('Access Denied')); ?>
<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="<?=$this->url("");?>"><?php echo SITE; ?></a>
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
		</div>
	</div>
</div>