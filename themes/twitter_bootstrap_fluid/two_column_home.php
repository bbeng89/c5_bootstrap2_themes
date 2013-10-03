<?php
	defined('C5_EXECUTE') or die(_('Access Denied'));
	$this->inc('elements/header.php');
?>

<div class="row-fluid">
	<div class="span12">
		<?php
			$a = new Area('Main Header');
			$a->display($c);
		?>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<?php
			$a = new Area('Column 1');
			$a->display($c);
		?>
	</div>
	<div class="span6">
		<?php
			$a = new Area('Column 2');
			$a->display($c);
		?>
	</div>
</div>

<?php $this->inc('elements/footer.php'); ?>

		
