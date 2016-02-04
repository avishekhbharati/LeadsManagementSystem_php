<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
       
        require APP . 'view/home/login.php';
        }

    //Post : login
    public function login(){
        if(isset($_POST['btn_submit_login'])){
            $count=$this->model->checkLogin($_POST['username'], $_POST['password']);
            
            if($count==1 && $_SESSION['usertype']==2){
                //echo URL;
                $path=URL.'dashboard/counselor';
                header('location:'.$path);
            }
             elseif ($count==1 && $_SESSION['usertype']==1) {
                $path=URL.'dashboard/admin';
                header('location:'.$path);
             }

            else
            {
                echo 'invalid';
               //header('location:'.URL.'home');
                
            }
        }
        
    }



    
}
