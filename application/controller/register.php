<?php
class Register extends Controller
{
	public function index(){

	 	require APP . 'view/_templates/header1.php';
        require APP . 'view/register/registration.php';
        require APP . 'view/_templates/footer1.php';
	}


}

?>