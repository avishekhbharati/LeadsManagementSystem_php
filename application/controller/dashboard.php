<?php


class Dashboard extends Controller
{
	public function counselor(){

		if($_SESSION['usertype']==2){
		$GetLeads = $this->model->getLeadsByCounselor();
        $followupCount = $this->model->getFollowupCount();
        $followupToday = $this->model->getFollowupToday();

	 	require APP . 'view/_templates/header2.php';
        require APP . 'view/dashboard/counselor.php';
        require APP . 'view/_templates/footer2.php';
    }
    else
    	echo 'failed';

	}


//calls admin dashboard
	public function admin(){
		if($_SESSION['usertype']==1){
		require APP . 'view/_templates/header1.php';
        require APP . 'view/dashboard/admin-dashboard.php';
        require APP . 'view/_templates/footer1.php';
    }
    else
    	echo 'Invalid access !';

	 	
	}
//followup page
	public function followup(){
		require APP . 'view/_templates/header2.php';
        require APP . 'view/lead/followup.php';
        require APP . 'view/_templates/footer2.php';
	 	
	}


}

?>