<?php

class LmsModel
{
    
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {

        try {
            $this->db = $db;
            
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }



    //check login validate
    public function checkLogin($username,$password){
        $user=mysql_real_escape_string($username);
        $pass=md5(mysql_real_escape_string($password));
        $sql="select count(user_id) as uid from user where email='$user' and password='$pass'";
        $sql1="select user_id as sessionuid, role as usertype from user where email='$user' and password='$pass'";
        $query=$this->db->prepare($sql);
        $query->execute();
        $query1=$this->db->prepare($sql1);
        $query1->execute();
         $_SESSION['user']=$query1->fetch()->sessionuid;
         $query1->execute();
         $_SESSION['usertype']=$query1->fetch()->usertype;
        
        return $query->fetch()->uid;
    }

//(`lead_id`, `fname`, `lname`, `email`, `contactno`, `address`, `date`, `status`, `is_student`, `college`, `course_id`, `user_id`) 
 //VALUES (NULL, 'hello', 'world', 'helO@yahoo.com', '9899898', 'hellothere ', '2016-01-22', 'active', '0', 'sasdasdsada', '2', '1');

    //insert lead details
    //user_id : form session, course_id: value form select, date: curent date
    public function addLeads($fname,$lname,$address,$contact,$college,$email, $course, $semester, $followup){
        $user_id=$_SESSION['user'];
        $date = date("Y-m-d");
        $dateToday = strtotime($date);

        $sql="insert into lead (fname,lname, email, contactno, address, date, college, course_id, user_id, semester) 
              values ('$fname','$lname','$email','$contact', '$address', CURDATE(), '$college', '$course' , '$user_id', '$semester')";
        $query=$this->db->prepare($sql);
        $query->execute();
        $newId=  $this->db->lastInsertId();

        $sql2 = "Insert into followup( user_id, lead_id, date, feedback) values('$user_id','$newId', '$followup', 'registered today !!!!')";
        $query2 =$this->db->prepare($sql2);
        return $query2->execute();

    }


    public function AllFeadbacks($id){
        $sql = "Select * from followup where lead_id ='$id'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }


//Get all course is and name
    public function getAllCourse()
    {
        $sql = "SELECT * FROM course";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    public function getAllUsers(){
        $sql = "Select * from user";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function getUserById($id){
        $sql = "Select * from user where user_id ='$id'";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch();
    }



    public function getLeadById($id){
        $sql = "SELECT * FROM lead where lead_id = '$id'";        
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch();
    }
    
    public function getAllLead(){
          $user_id=$_SESSION['user'];
        if($user_id==1){
            $sql = "SELECT * FROM lead";
        }
        else{      
            $sql = "SELECT * FROM lead where user_id='$user_id'";    
        }    
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    //edit details
    public function editLeads($fname,$lname,$address,$contact,$college,$email, $course,$id,$status, $isStudent){
    $sql="update `lead` set `fname`='$fname',`lname`='$lname', `email`='$email', `contactno`='$contact', 
    `address`='$address', `college`='$college', `status`='$status', `is_student`='$isStudent' where `lead_id`='$id'"; 
     $query=$this->db->prepare($sql);
        return $query->execute();
     }

     //detail leads
     public function detailLeads($id){    
        $sql="Select l.*,c.course_name from lead l,course c
         where l.course_id=c.course_id and l.lead_id='$id'";
        $query=$this->db->prepare($sql);
        $query->execute();
        return $query->fetch();
     }

     //get all follow up
     public function followupcount($id){
        $sql="select count(followup_id) as fcount from followup where lead_id='$id'";
        $query=$this->db->prepare($sql);
        $query->execute();
        return $query->fetch()->fcount;
    }
        //followup entry and edit status

    public function addFollowup($id,$feedback,$status, $date){
        $dateToday = 
        $userid=$_SESSION['user'];
        $sql="insert into followup (user_id,lead_id, date, feedback) values ('$userid','$id','$date', '$feedback')";
        $query=$this->db->prepare($sql);
        $query->execute();
        
        //get count and set status


        //**************
        $fcount = $this->followupcount($id);
        if($fcount > 7){
        $sql6="update lead set status='dismissed' where lead_id='$id'";
        $query6=$this->db->prepare($sql6);
        $query6->execute();
        }else{
            $sql1="update lead set status='$status' where lead_id='$id'";
        $query1=$this->db->prepare($sql1);
        $query1->execute();
        return 2;
        }


        //********


        

    }
    
    //add user                  
    public function addCounselor($fname,$lname,$address,$contact,$email, $password, $role){
        $sql="insert into user(fname,lname,address,contactno,email, password, role) values ('$fname','$lname','$address','$contact','$email','$password','$role')";
        $query=$this->db->prepare($sql);
        return $query->execute();
    }

    //edit user
    public function _editUser($fname, $lname, $address, $contact, $email, $role, $user_id){
        $sql = "Update user set fname='$fname', lname='$lname', contactno='$contact', address='$address', email='$email', role='$role' where user_id='$user_id'";

               
        $query=$this->db->prepare($sql);
        return $query->execute();
    }

//*******************************  Follow up

    //All leads to be followed up today

    public function getLeadsByCounselor(){
          $user_id=$_SESSION['user'];
        
            $sql = "SELECT * FROM lead where user_id='$user_id' and status='active' and is_student = 0";
            $query=$this->db->prepare($sql);
            $query->execute();
            return $query->fetchAll();
    }


    public function getFollowupToday(){
        $user_id=$_SESSION['user'];

        $sql = "select l.lead_id, l.status, l.fname, l.lname from lead l, followup f where l.lead_id = f.lead_id and f.user_id = '$user_id' and l.is_student = 0 and f.date= CURDATE() and feedback<>''";
        $query=$this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function getFollowupCount(){
        $user_id=$_SESSION['user'];
        

        $sql = "SELECT lead_id, count(lead_id) as count FROM `followup` group by lead_id";
        $query=$this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();

    }










    //************************** FOR REPORTS *************************


    public function getLeadByStatus($status){
        $sql = "SELECT l.*, c.course_name from lead l, course c where l.course_id = c.course_id and  status ='$status'";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

//retusns the list of the counselior for the dop down populate
    public function getAllCounselor(){
        $sql = "SELECT user_id, concat(fname,' ', lname) as fullname FROM `user` WHERE role = 2";
        $query=$this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

//Get leads followed by the each  counselor
    public function get_counselor_report($counselor_id){
        $sql = "SELECT l.* , c.course_name FROM lead l, course c WHERE l.course_id = c.course_id AND user_id ='$counselor_id'";
        $query=$this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


//Get active leads by semester 
    public function getActiveLeadBySemester($semester, $year){
        $sql = "SELECT l.*, c.course_name FROM `lead` l, course c WHERE c.course_id = l.course_id and  year(date)='$year' and semester ='$semester' and status='active'";
        $query=$this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function getCustomReport($date, $semester, $counselor){

        $sql = "select l.fname, l.lname, l.semester, year(l.date) as date, c.course_name from lead l, course c where c.course_id = l.course_id and ";

        if(!empty($date)){

            if(!empty($semester) || !empty($counselor)){
                $sql .=" date='$date'  and ";
            }
            else{
                $sql .= " date='$date' ";
            }            
        }

        if(!empty($semester)){
            if(!empty($counselor)){
                $sql .="  semester = '$semester' and  ";
            }
            else{
                $sql .=" semester = '$semester' ";
            }            
        }
        if(!empty($counselor)){
            if(!empty($semester) || !empty($date)){
                $sql .=" user_id = '$counselor'"; 
            }
            else{
                $sql .=" user_id = '$counselor'"; 
            }
            
        } 
        
        
        
        $query= $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

}
?>