<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->idProducto,
);

// $this->menu=array(
// 	array('label'=>'List Producto', 'url'=>array('index')),
// 	array('label'=>'Create Producto', 'url'=>array('create')),
// 	array('label'=>'Update Producto', 'url'=>array('update', 'id'=>$model->idProducto)),
// 	array('label'=>'Delete Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProducto),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Producto', 'url'=>array('admin')),
// );
?>

<h1>Producto : <?php echo $model->Descripcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idProducto',
		'idProveedor',
		'Descripcion',
		'precioVenta',
		'precioCompra',
		'stock',
		'fechaVen',
	),
)); ?>
