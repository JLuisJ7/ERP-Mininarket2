<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'idProducto'); ?>
		<?php echo $form->textField($model,'idProducto',array('class' => 'form-control',)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'idProveedor'); ?>
		<?php echo $form->textField($model,'idProveedor',array('class' => 'form-control',)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('class' => 'form-control','size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'precioVenta'); ?>
		<?php echo $form->textField($model,'precioVenta',array('class' => 'form-control','size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'precioCompra'); ?>
		<?php echo $form->textField($model,'precioCompra',array('class' => 'form-control','size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'stock'); ?>
		<?php echo $form->textField($model,'stock',array('class' => 'form-control',)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'fechaVen'); ?>
		<?php echo $form->textField($model,'fechaVen',array('class' => 'form-control',)); ?>
	</div>

	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search',array('class' => 'btn btn-success',)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->