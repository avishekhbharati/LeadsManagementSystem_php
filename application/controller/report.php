<?php
class Report extends Controller
{

	public function index(){
		//$AllLead = $this->model->getAllLead();
		

		if (isset($_POST["btn_report_counselor"])) {
			//$counselor_id = $_POST["select"];
            // do addSong() in model/model.php
			$counselor_id = $_POST["opt"];
            $list = $this->model->get_counselor_report($counselor_id);
            $allCounselor = $this->model->getAllCounselor();
            require APP . 'view/_templates/header1.php';
	        require APP . 'view/admin/report-counselor.php';
	        require APP . 'view/_templates/footer1.php';        
        }
        else{
        $list = null;
        $allCounselor = $this->model->getAllCounselor();

	 	require APP . 'view/_templates/header1.php';
        require APP . 'view/admin/report-counselor.php';
        require APP . 'view/_templates/footer1.php';
    }
	}


//Active leads on each semester Report
	public function activeReport(){
		

		if(isset($_POST["btn_report_activeLead"])) {
			$semester = $_POST['semester'];
			$year = $_POST['year'];

			$list = $this->model->getActiveLeadBySemester($semester, $year); 

			require APP . 'view/_templates/header1.php';
	        require APP . 'view/admin/report-active.php';
	        require APP . 'view/_templates/footer1.php';
		}
		else{

		$list = null;
		require APP . 'view/_templates/header1.php';
        require APP . 'view/admin/report-active.php';
        require APP . 'view/_templates/footer1.php';
    }
	}




	public function leadByStatus(){

		if(isset($_POST['btn_submit'])){
			$status = $_POST['status'];
			$list = $this->model->getLeadByStatus($status);


			require APP . 'view/_templates/header1.php';
        	require APP . 'view/admin/report-leadbystatus.php';
        	require APP . 'view/_templates/footer1.php';
		}
		else{

			$list = null;
			require APP . 'view/_templates/header1.php';
        	require APP . 'view/admin/report-leadbystatus.php';
        	require APP . 'view/_templates/footer1.php';
		}
	}



//custom report
	public function customReport(){
		if(isset($_GET["btn_submit"])){
			$date = $_GET['date'];
			$semester =$_GET['semester'];
			$counselor = $_GET['counselor'];

			


			$customData = $this->model->getCustomReport($date, $semester, $counselor);		
			$allCounselor = $this->model->getAllCounselor();
			
			require APP . 'view/_templates/header1.php';
	        require APP . 'view/admin/custom-report.php';
	        require APP . 'view/_templates/footer1.php';

		}
		else{

		$customData =null;
		$allCounselor = $this->model->getAllCounselor();
		

		require APP . 'view/_templates/header1.php';
        require APP . 'view/admin/custom-report.php';
        require APP . 'view/_templates/footer1.php';
    }
	}







	public function getCounselorReport(){

	}

	

}
?>