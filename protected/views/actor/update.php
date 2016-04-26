<?php
/* @var $this ActorController */
/* @var $model Actor */

$this->breadcrumbs=array(
	'Actors'=>array('index'),
	$model->actor_id=>array('view','id'=>$model->actor_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actor', 'url'=>array('index')),
	array('label'=>'Create Actor', 'url'=>array('create')),
	array('label'=>'View Actor', 'url'=>array('view', 'id'=>$model->actor_id)),
	array('label'=>'Manage Actor', 'url'=>array('admin')),
);
?>

<h1>Update Actor <?php echo $model->actor_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>