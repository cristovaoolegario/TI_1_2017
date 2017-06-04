<?php
include '../../Controllers/UsuarioController.php';

 class UsuarioTest extends PHPUnit_Extensions_Database_TestCase
 {

	public function test_UsuarioController_select()
	{
		UsuarioController::select();
	}
	
	public function test_UsuarioController_autenticacao()
	{
		UsuarioController::autenticacao();
	}
	
	public function test_UsuarioController_update()
	{
		UsuarioController::update();
	}
	
	public function test_UsuarioController_insert()
	{
		UsuarioController::insert();
	}
	
	public function test_UsuarioController_delete()
	{
		UsuarioController::delete();
	}
}

	?>
