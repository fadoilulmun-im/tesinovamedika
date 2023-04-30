<?php
/* @var $this HandlingController */
/* @var $model Handling */

$this->breadcrumbs=array(
	'Handlings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Handling', 'url'=>array('index')),
	array('label'=>'Manage Handling', 'url'=>array('admin')),
);
?>

<h1>Create Handling</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>