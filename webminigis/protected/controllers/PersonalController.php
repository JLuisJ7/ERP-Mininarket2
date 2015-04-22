<?php
class PersonalController extends Controller{

	public function actionListadoEmpleados(){

		$empleados = Sispersona::model()->listaPersonasPorCondicion(18);

		$this->render("listadoEmpleados", array(
			'empleados'=>$empleados,
		));
	}
}