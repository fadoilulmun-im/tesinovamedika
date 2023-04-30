<?php
/* @var $this HandlingController */
/* @var $data Handling */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_id')); ?>:</b>
	<?php echo CHtml::encode($data->patient->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicine_id')); ?>:</b>
	<?php echo CHtml::encode($data->medicine->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />


</div>