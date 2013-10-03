<?php
	defined('C5_EXECUTE') or die(_('Access Denied'));
	$this->inc('elements/header.php');
?>


<?php
	$a = new Area('Main Content');
	$a->display($c);
?>


<?php $this->inc('elements/footer.php'); ?>

		
