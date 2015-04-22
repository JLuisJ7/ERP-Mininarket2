<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->idProveedor=>array('view','id'=>$model->idProveedor),
	'Update',
);

/*$this->menu=array(
	array('label'=>'List Proveedor', 'url'=>array('index')),
	array('label'=>'Create Proveedor', 'url'=>array('create')),
	array('label'=>'View Proveedor', 'url'=>array('view', 'id'=>$model->idProveedor)),
	array('label'=>'Manage Proveedor', 'url'=>array('admin')),
);*/
?>

<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class='box-header with-border'>
                  <h3 class='box-title'><i class="fa fa-user"></i> Actualizar Proveedor : <?php echo $model->nombre ; ?></h3>
                </div>
                
                <div class="box-body">
                	
<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->




