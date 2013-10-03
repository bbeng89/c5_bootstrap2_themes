<?php
	defined('C5_EXECUTE') or die(_('Access Denied'));
	$this->inc('elements/header.php');
?>

<div class="row-fluid">
	<div class="span3">
		<?php
			$a = new Area('Left Sidebar');
			$a->display($c);
		?>
	</div>
	<div class="span9">
		<?php
			$a = new Area('Main Content');
			$a->display($c);
		?>
	</div>
</div>

<?php $this->inc('elements/footer.php'); ?>