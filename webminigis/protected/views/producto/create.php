<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);

// $this->menu=array(
// 	array('label'=>'List Producto', 'url'=>array('index')),
// 	array('label'=>'Manage Producto', 'url'=>array('admin')),
// );
?>

<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class='box-header with-border'>
                  <h3 class='box-title'><i class="fa fa-user"></i> Agregar Productos</h3>
                </div>
                
                <div class="box-body">
                	
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->


