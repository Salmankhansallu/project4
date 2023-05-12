<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\reportModel;
use App\Models\lessonModel;

class LoginController extends BaseController
{
    public $loginModel;
    public function __construct(){
        $this->loginModel=new LoginModel();
    }
    public function index()
    {
        return view('index');
    }
    public function login(){ 
        return view('admin/dashboard');
    }
    public function user_login(){ 
            $session=session();
            $loginModel=new loginModel();
            $useremail=$this->request->getVar('email');
            $password=sha1($this->request->getVar('password'));
            $user_data['login_user']=$loginModel->getLoginDetail($useremail,$password);
            if(count($user_data['login_user'])>0){
                $session->set('userid',$user_data['login_user'][0]->id);
                $session->set('username',$user_data['login_user'][0]->first_name);
                // $session->set('username',$user_data['first_name']);
              return view('admin/dashboard');
            }
            else{
                $error='<span class="text-danger">Wrong Email id or Password...!</span>';
                $session->set('error',$error);
                // $_SESSION['error']=$error;
                // $session->setFlashdata('error', $error);
                 return view('index');
            }
        
          
    }
    public function user_profile(){
        $session=session();
        $loginModel=new loginModel();
        $user_id=$session->get('userid');
        $user_data['user']=$loginModel->where('id',$user_id)->first();
        return view('admin/user_profile',$user_data);
    }
    public function reports(){ 
        $session=session();
        $user_id=$session->get('userid');
        // $user_id=59;
        // $reportModel=new reportModel();
        // $lc_report['reports']=$reportModel->where('user_id',59)->find();
        $loginModel=new loginModel();
        $lc_report['reports']=$loginModel->reportData($user_id);
        // echo '<pre>';
        // print_r($lc_report['reports']);
        return view('admin/reports',$lc_report);
        
          
    }

    public function course_section(){
        $course_id=$_GET['id'];
        $loginModel=new loginModel();
        $section['section_detail']=$loginModel->getSectionDetail($course_id);
        // echo '<pre>';
        // print_r($section['section_detail']);
        return view('admin/course_section',$section);
    }
    public function lessons(){
        $ids=$_GET['ids'];
        $explode_ids=explode('%',$ids);
        $section_id=$explode_ids[0];
        $course_id=$explode_ids[1];
        // $uri = service('uri');
        // $id=$uri->getSegment(1);
        // $lessonmodel=new lessonModel();
        // $lesson_detail['lesson_data']=$lessonmodel->where('id',$lesson_id)->find();
        $loginModel=new loginModel();
        $lesson_detail['lesson_data']=$loginModel->getLesson_details($section_id,$course_id);
        // echo '<pre>';
        // print_r($lesson_detail['lesson_data']);
        return view("admin/lessons",$lesson_detail);

    }
    public function district_school(){
        return view('admin/district_school');
    }
    // public function join_table(){
    //     $db=\Config\Database::connect();
    //     $session=session();
    //     $user_id=$session->get('user_id');
    //     $loginModel=new loginModel();
    //     $builder=$db->table('course');
    //     $builder->select(['course.user_id','course.short_description','users.first_name']);
    //     $builder->join('users',"course.user_id='27'");
    //     $query=$builder->get();
    //     $data['data']=$query->getResult();
    //     // echo '<pre>';
    //     // print_r($query);
    //     return view('admin/join_table',$data);
    // }
    public function change_password(){
        
        return view('admin/change_password');
    }
    public function change_password_method(){
        $session=session();
        $loginModel=new loginModel();
        $useremail=$this->request->getVar('email');
        $current_password=sha1($this->request->getVar('current_password'));
        // echo $useremail;
        // exit;
        $email_from_db['user_email']=$loginModel->where('email',$useremail)->findAll();
        if(count($email_from_db['user_email'])>0){
            $password_from_db['user_password']=$loginModel->where('password',$current_password)->findAll();
            if(count($password_from_db['user_password'])>0){
                $new_password=sha1($this->request->getVar('new_password'));
                $confirm_new_password=sha1($this->request->getVar('confirm_new_password'));
                if($new_password==$confirm_new_password){
                    $password_change_success='<span class="text-success ml-2">Password change successfully...!</span>';
                    // $session->set('error',$error);
                    // $_SESSION['error']=$error;
                    $session->set('password_change_success', $password_change_success);
                    return view('admin/change_password');
                }
                else{
                    $new_password_error='<span class="text-danger ml-2">Current and new password does not match...!</span>';
                    // $session->set('error',$error);
                    // $_SESSION['error']=$error;
                    $session->set('new_password_error', $new_password_error);
                    return view('admin/change_password');
                }
            }
            else{
                $cur_password_error='<span class="text-danger ml-2">Current password mismatch...!</span>';
                // $session->set('error',$error);
                // $_SESSION['error']=$error;
                $session->set('cur_password_error', $cur_password_error);
                return view('admin/change_password');
            }
            // echo '<pre>';
            // print_r($password_from_db['user_password']);
            // exit;
        }
        else{
            $email_error='<span class="text-danger ml-2">Wrong Email id...!</span>';
            // $session->set('error',$error);
            // $_SESSION['error']=$error;
            $session->set('email_error', $email_error);
            return view('admin/change_password');
        }
    }
    public function logout(){
        $session=session();
        $session->destroy();
        return view('index');
    }
}
