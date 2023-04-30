<?php
/* @var $this HandlingController */
/* @var $model Handling */

$this->breadcrumbs=array(
	'Handlings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Handling', 'url'=>array('index')),
	array('label'=>'Create Handling', 'url'=>array('create')),
	array('label'=>'Update Handling', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Handling', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Handling', 'url'=>array('admin')),
);
?>

<h1>View Handling #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		[
			'label' => 'Employee',
			'value' => $model->employee->name,
		],
		[
			'label' => 'Patient',
			'value' => $model->patient->name,
		],
		[
			'label' => 'Action',
			'value' => $model->action->title,
		],
		[
			'label' => 'Medicine',
			'value' => $model->medicine->title,
		],
		// 'employee_id',
		// 'patient_id',
		// 'action_id',
		// 'medicine_id',
		'price',
		'date',
		'notes',
	),
)); ?>
