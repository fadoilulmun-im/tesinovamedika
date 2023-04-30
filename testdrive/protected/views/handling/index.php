<?php
/* @var $this HandlingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Handlings',
);

$this->menu=array(
	array('label'=>'Create Handling', 'url'=>array('create')),
	array('label'=>'Manage Handling', 'url'=>array('admin')),
);
?>

<h1>Handlings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
