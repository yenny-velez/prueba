<?php
/* @var $this ActorController */
/* @var $model Actor */

$this->breadcrumbs=array(
	'Actors'=>array('index'),
	$model->actor_id,
);

$this->menu=array(
	array('label'=>'List Actor', 'url'=>array('index')),
	array('label'=>'Create Actor', 'url'=>array('create')),
	array('label'=>'Update Actor', 'url'=>array('update', 'id'=>$model->actor_id)),
	array('label'=>'Delete Actor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->actor_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Actor', 'url'=>array('admin')),
);
?>

<h1>View Actor #<?php echo $model->actor_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'actor_id',
		'first_name',
		'last_name',
		'last_update',
	),
)); ?>
