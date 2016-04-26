<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container">
	<div class ="row-fluid">
		<div class="span12">
			<?php
				$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-pills'),
				));
			?>

		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>
</div>

<div class="span-19">
	<div id="content">
		
	</div><!-- content -->
</div>

<?php $this->endContent(); ?>