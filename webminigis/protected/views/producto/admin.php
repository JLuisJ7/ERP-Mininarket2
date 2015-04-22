<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Manage',
);

// $this->menu=array(
// 	array('label'=>'List Producto', 'url'=>array('index')),
// 	array('label'=>'Create Producto', 'url'=>array('create')),
// );

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#producto-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>






<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class='box-header with-border'>
                  <h3 class='box-title'><i class="fa fa-user"></i> Listado de Productos</h3>
                </div>
                <div class="box-body">
                	<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tablareporte',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idProducto',
		'idProveedor',
		'Descripcion',
		'precioVenta',
		'precioCompra',
		'stock',
		'fechaVen',	
		array(
			'class'=>'CButtonColumn',
		),
	),
    'pager'=>array(
        'header'         => '',
        'firstPageLabel' => '&lt;&lt;',
        'prevPageLabel'  => 'Anterior',
        'nextPageLabel'  => 'Siguiente',
        'lastPageLabel'  => '&gt;&gt;',
        // css class         
        'firstPageCssClass'=>'pager_first',//default "first"
        'lastPageCssClass'=>'pager_last',//default "last"
        'previousPageCssClass'=>'pager_previous',//default "previours"
        'nextPageCssClass'=>'pager_next',//default "next"
        'internalPageCssClass'=>'pager_li',//default "page"
        'selectedPageCssClass'=>'pager_selected_li',//default "selected"
        'hiddenPageCssClass'=>'pager_hidden_li',//default "hidden" 
        'htmlOptions'=>array(
          'class'=>'pagination',
          'style'=>'',
          'id'=>'mypager_id'
        ),
    ),
	
)); ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->