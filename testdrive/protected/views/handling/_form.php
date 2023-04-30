<?php
/* @var $this HandlingController */
/* @var $model Handling */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'handling-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<!-- <?php echo $form->textField($model,'employee_id'); ?> -->
		<?php echo $form->dropDownList($model,'employee_id', CHtml::listData(Employee::model()->findAll(), 'id', 'name'), array('empty' => 'Select Employee')); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_id'); ?>
		<!-- <?php echo $form->textField($model,'patient_id'); ?> -->
		<?php echo $form->dropDownList($model,'patient_id', CHtml::listData(Patient::model()->findAll(), 'id', 'name'), array('empty' => 'Select Patient')); ?>
		<?php echo $form->error($model,'patient_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'action_id'); ?>
		<!-- <?php echo $form->textField($model,'action_id'); ?> -->
		<?php echo $form->dropDownList($model,'action_id', CHtml::listData(Action::model()->findAll(), 'id', 'title'), array('empty' => 'Select Action')); ?>
		<?php echo $form->error($model,'action_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'medicine_id'); ?>
		<!-- <?php echo $form->textField($model,'medicine_id'); ?> -->
		<?php echo $form->dropDownList($model,'medicine_id', CHtml::listData(Medicine::model()->findAll(), 'id', 'title'), array('empty' => 'Select Medicine')); ?>
		<?php echo $form->error($model,'medicine_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->numberField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->dateField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->