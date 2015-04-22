<?php
class AlmacenController extends Controller{

	public function actionListadoProductos(){

		$producto = Producto::model()->listaProductos();

		$this->render("listadoProductos", array(
			'producto'=>$producto,
		));
	}

		public function actionCreate()
	{
		$model=new Producto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			if($model->save())
				$this->redirect(array('listadoProductos'));
		}

		$this->render('create',array(
			'producto'=>$productoaa,
		));
	}

	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('listadoProductos'));
	}

		public function loadModel($id)
	{
		$model=Producto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	
}