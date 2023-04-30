<?php
/* @var $this HandlingController */
/* @var $model Handling */

$this->breadcrumbs=array(
	'Handlings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Handling', 'url'=>array('index')),
	array('label'=>'Create Handling', 'url'=>array('create')),
	array('label'=>'View Handling', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Handling', 'url'=>array('admin')),
);
?>

<h1>Update Handling <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>