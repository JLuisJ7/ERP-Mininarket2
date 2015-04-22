<?php
//=================================================================================
// CONFIGURACIONES DEL MODULO
//=================================================================================
//Titulo de la pagina
$this->pageTitle=Yii::app()->name . ' - Modulo de Almacen';
// Titulo del modulo
$this->moduleTitle="Modulo de Almacen";
// Subtitulo del modulo
$this->moduleSubTitle="Productos";
// Breadcrumbs
$this->breadcrumbs=array(
	'Productos',
);?>

<!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class='box-header with-border'>
                  <h3 class='box-title'><i class="fa fa-user"></i> Listado de Productos</h3>
                </div>
                
                <div class="box-body">
                	<div>
                	<a href="?r=producto/create"/>
 <input type="button" value="Agregar"/></a>
                </div>
                  <?php                 
                  $this->widget('zii.widgets.grid.CGridView', array(
                    'id'=>'tablareporte',
                    //'filter'=>true,
                    'itemsCssClass' => 'table table-bordered table-hover',
                    'dataProvider'=>$producto,
                    'summaryText'=>'Mostrando {start}-{end} de {page} Resultado(s)',
                    'emptyText'=>'No se encontraron registros para esta consulta...',
                    'columns'=>array(
                      array(
                           'name'=>'ID',
                           'value'=>'$data->idProducto',
                       ),
                      array(
                           'name'=>'idProveedor',
                           'value'=>'$data->idProveedor',
                       ),
                      array(
                           'name'=>'Descripcion',
                           'value'=>'$data->Descripcion',
                       ),
                      array(
                           'name'=>'Precio de Venta',
                           'value'=>'$data->precioVenta',
                       ),
                      array(
                           'name'=>'Precio de Compra',
                           'value'=>'$data->precioCompra',
                       ),
                      array(
                           'name'=>'Stock',
                           'value'=>'$data->stock',
                       ),
                      array(
                           'name'=>'Fecha de Vencimiento',
                           'value'=>'$data->fechaVen',
                       ),
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
                   ));
                   ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->