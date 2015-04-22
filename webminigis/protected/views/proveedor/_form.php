<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<p class="note">Los campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('class' => 'form-control','size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tipoPersona'); ?>
		<?php echo $form->textField($model,'tipoPersona',array('class' => 'form-control',)); ?>
		<?php echo $form->error($model,'tipoPersona'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'RUC'); ?>
		<?php echo $form->textField($model,'RUC',array('class' => 'form-control','size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'RUC'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('class' => 'form-control','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('class' => 'form-control','size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->