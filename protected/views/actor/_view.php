<?php
/* @var $this ActorController */
/* @var $data Actor */
?>

<div class="media">

	
	<div class="media-body">
		<h2 class="media-heading">
			<p><<?php echo CHtml::encode($data->getAttributeLabel('actor_id')); ?>:</p>
			<p><?php echo CHtml::link(CHtml::encode($data->actor_id), array('view', 'id'=>$data->actor_id)); ?>
			<?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>
			<?php echo CHtml::encode($data->first_name); ?></p>
			<p><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>
			<?php echo CHtml::encode($data->last_name); ?></p>
			<p><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>
			<?php echo CHtml::encode($data->last_update); ?></p>
	
		</h2>
	</div>

</div>