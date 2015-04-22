<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->idProducto=>array('view','id'=>$model->idProducto),
	'Update',
);

// $this->menu=array(
// 	array('label'=>'List Producto', 'url'=>array('index')),
// 	array('label'=>'Create Producto', 'url'=>array('create')),
// 	array('label'=>'View Producto', 'url'=>array('view', 'id'=>$model->idProducto)),
// 	array('label'=>'Manage Producto', 'url'=>array('admin')),
// );
?>

<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class='box-header with-border'>
                  <h3 class='box-title'><i class="fa fa-user"></i> Actualizar Producto Nro: <?php echo $model->idProducto; ?></h3>
                </div>
                
                <div class="box-body">
                	
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->


