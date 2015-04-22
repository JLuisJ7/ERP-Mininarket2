<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'idProveedor'); ?>
		<?php echo $form->textField($model,'idProveedor',array('class' => 'form-control',)); ?>
		<?php echo $form->error($model,'idProveedor'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('class' => 'form-control','size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'precioVenta'); ?>
		<?php echo $form->textField($model,'precioVenta',array('class' => 'form-control','size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'precioVenta'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'precioCompra'); ?>
		<?php echo $form->textField($model,'precioCompra',array('class' => 'form-control','size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'precioCompra'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('class' => 'form-control',)); ?>
		<?php echo $form->error($model,'stock'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fechaVen'); ?>
		<?php echo $form->textField($model,'fechaVen',array('class' => 'form-control',)); ?>
		<?php echo $form->error($model,'fechaVen'); ?>
	</div>

	<div class=" form-group">
		
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save' , ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->