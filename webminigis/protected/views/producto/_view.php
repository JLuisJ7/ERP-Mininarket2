<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProducto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProducto), array('view', 'id'=>$data->idProducto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedor')); ?>:</b>
	<?php echo CHtml::encode($data->idProveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioVenta')); ?>:</b>
	<?php echo CHtml::encode($data->precioVenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precioCompra')); ?>:</b>
	<?php echo CHtml::encode($data->precioCompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stock')); ?>:</b>
	<?php echo CHtml::encode($data->stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaVen')); ?>:</b>
	<?php echo CHtml::encode($data->fechaVen); ?>
	<br />


</div>