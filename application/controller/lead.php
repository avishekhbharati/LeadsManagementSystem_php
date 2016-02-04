<?php

class Lead extends Controller
{
	public function index(){
		$AllLead = $this->model->getAllLead();

	 	require APP . 'view/_templates/header2.php';
        require APP . 'view/lead/manage-lead.php';
        require APP . 'view/_templates/footer2.php';
	}

	public function test(){
		require APP . 'view/_templates/header2.php';
        require APP . 'view/lead/add-lead.php';
        require APP . 'view/_templates/footer2.php';
	}

	public function addLead(){
		$courses= $this->model->getAllCourse();
		require APP . 'view/_templates/header2.php';
        require APP . 'view/lead/add-lead.php';
        require APP . 'view/_templates/footer2.php';
	}

	public function editLead($lead_id){
		if (isset($lead_id)) {

			$leadInfo = $this->model->getLeadById($lead_id);
			$courses= $this->model->getAllCourse();

			require APP . 'view/_templates/header2.php';
	        require APP . 'view/lead/edit-lead.php';
	        require APP . 'view/_templates/footer2.php';
	    }
	}

	public function detailLead($id){

		$feedback   = $this->model->AllFeadbacks($id);
		$detailInfo = $this->model->detailLeads($id);
		$getFollowup= $this->model->followupcount($id);

		require APP . 'view/_templates/header2.php';
        require APP . 'view/lead/lead-detail.php';
        require APP . 'view/_templates/footer2.php';
	}

	public function followUp($id){
		$leadInfo = $this->model->getLeadById($id);
		$getFollowup= $this->model->followupcount($id);
		require APP . 'view/_templates/header2.php';
        require APP . 'view/lead/followUp.php';
        require APP . 'view/_templates/footer2.php';
	}

//HTTP:POST
	public function _addLead(){
		if(isset($_POST['btn_submit_add'])){
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$address=$_POST['address'];
			$contact=$_POST['contact'];
			$college=$_POST['college'];
			$email=$_POST['email'];
			$course=$_POST['course'];
			$semester = $_POST['semester'];
			$followup = $_POST['followup'];

			$success = $this->model->addLeads($fname,$lname,$address,$contact,$college,$email,$course, $semester, $followup);

			
			if($success > 0){
				header('location:'.URL.'lead/addLead');
			}
		}
	}

//HTTP : POST
	public function _editLead(){
		if(isset($_POST['btn_submit_edit'])){
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$id=$_POST['leadid'];
			$address=$_POST['address'];
			$contact=$_POST['contact'];
			$college=$_POST['college'];
			$email=$_POST['email'];
			$course=$_POST['course'];
			$status=$_POST['status'];
			$isStudent = $_POST['isStudent'];
		
			
			$success = $this->model->editLeads($fname,$lname,$address,$contact,$college,$email,$course,$id,$status, $isStudent);

			if($success > 0){
				header('location:'.URL.'lead');
			 }
		}
	}



//logout
	public function logout(){
		session_destroy();
		header('location:'.URL.'home');
	}

//follow up entry
	public function _followupLead(){
		if(isset($_POST['btn_submit'])){
			$id=$_POST['leadid'];
			$status=$_POST['status'];
			$feedback=$_POST['feedback'];
			$date = $_POST['next_followup'];
			

			$sucess= $this->model->addFollowup($id,$feedback,$status, $date);

			if($sucess > 0){
				header('location:'.URL.'dashboard/counselor');
			}

		}

	}	

}



?>