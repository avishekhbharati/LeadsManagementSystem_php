<?php

if($_SESSION['usertype']==1){
class Admin extends Controller
{
	
	public function index(){
		
		$list = $this->model->getAllUsers();
	 	require APP . 'view/_templates/header1.php';
        require APP . 'view/admin/manage-counselor.php';
        require APP . 'view/_templates/footer1.php';
   
	}

	public function addCounselor(){
		//$AllLead = $this->model->getAllLead();
	 	require APP . 'view/_templates/header1.php';
        require APP . 'view/admin/add-counselor.php';
        require APP . 'view/_templates/footer1.php';
	}

	public function _addCounselor(){
		if(isset($_REQUEST['submit_add_counselor'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address=$_POST['address'];
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$pass = $_POST['password'];
		$password=md5($pass);
		$role=$_POST['role'];

		$success=$this->model->addCounselor($fname,$lname,$address,$contact,$email, $password, $role);
		
		if($success > 0){
				header('location:'.URL.'admin');
			}
		}
	}


	public function editUser($id){

		$data =  $this->model->getUserById($id);
		require APP . 'view/_templates/header1.php';
        require APP . 'view/admin/edit-user.php';
        require APP . 'view/_templates/footer1.php';
	}


	public function _editUser(){
		if(isset($_POST['btn_submit'])){
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$address=$_POST['address'];
			$contact=$_POST['contactno'];
			$email=$_POST['email'];
			//$password = $_POST['password'];
			$role=$_POST['role'];
			$user_id =$_POST['user_id'];

			$success = $this->model->_editUser($fname,$lname,$address,$contact,$email, $role, $user_id);

			if($success>0){
				//header('location:'.URL.'admin');
				$list = $this->model->getAllUsers();
			 	require APP . 'view/_templates/header1.php';
		        require APP . 'view/admin/manage-counselor.php';
		        require APP . 'view/_templates/footer1.php';
			}

		}
	}


	public function userDetails($id){
		
		$data =  $this->model->getUserById($id);

		require APP . 'view/_templates/header1.php';
        require APP . 'view/admin/user-detail.php';
        require APP . 'view/_templates/footer1.php';
	}
}


}
else
	echo 'Failed !';


?>