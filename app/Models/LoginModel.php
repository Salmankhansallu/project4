<?php

namespace App\Models;

use CodeIgniter\Model;
// use Config\Database;
class LoginModel extends Model
{
    
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    // protected $useAutoIncrement = true;
    // protected $returnType       = 'array';
    // protected $useSoftDeletes   = false;
    // protected $protectFields    = true;
    protected $allowedFields    = ['id','email','password','type_id','status'];
     public function getLoginDetail($useremail,$password){
        $db=\Config\Database::connect();
        $query=$db->query("select * from users where email='$useremail' and password='$password'");
        $result=$query->getResult();
        // print_r($result);
        return $result;
        
    }
    public function reportData($id){
        $db=\Config\Database::connect();
        $builder=$db->table('offline_lc_report');
        $builder->select(['course.title','course.section','offline_lc_report.report'])->limit(30);
        
        $builder->join('course',"offline_lc_report.user_id='$id'");
        $query=$builder->get();
        $result=$query->getResult();
        // print_r($course_data[0]->course_id);
        return $result;
    }
    public function getSectionDetail($course_id){
        $db=\Config\Database::connect();
        $query=$db->query("select * from section where course_id='$course_id'");
        $result=$query->getResult();
        // echo '<pre>';
        // print_r($result);
        return $result;
    }
    public function getLesson_detail($lesson){
        $db=\Config\Database::connect();
        $explode_data=explode('%',$lesson);
        $lesson_array=$explode_data[0];
        $course_title=$explode_data[1];
        $lesson_array=json_decode($lesson_array);
        // echo '<pre>';
        // print_r($lesson_array);
        $lesson_id_array=array();
        foreach($lesson_array as $lesson){
            $lesson_id_array[]=$lesson->lesson_id;
        }
        
        $lesson_detail=array();
        $no=0;
        foreach($lesson_id_array as $id){
            $query=$db->query("select * from lesson where id='$id'");
            $result=$query->getResult();
            $lesson_detail[]=array("lesson" => $result,"at_time"=>$lesson_array[$no]->at_time, "end_time"=>$lesson_array[$no]->end_time,'course_title'=>$course_title);
            $no++;
        }
        // $lesson_detail['course_title']=$course_title;
        
        // echo gettype($result);
        // $builder=$db->table('offline_lc_report');
        // $builder->select(['offline_lc_report.report']);
        
        // // $builder->join('course',"offline_lc_report.user_id='$id'")->limit(10);
        // $query=$builder->get(2);
        // $result=$query->getResult();
        // echo '<pre>';
        // print_r($lesson_detail);
        return $lesson_detail;
    }
    public function getLesson_details($section_id,$course_id){
        $db=\Config\Database::connect();
        $query=$db->query("select * from lesson where id='$section_id'");
        $result=$query->getResult();
        // echo '<pre>';
        // print_r($result);
        return $result;
    }
    // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
    //  function getUserData($username,$password){
    //     $sql="SELECT * FROM users WHERE email=$username AND password=$password";  
    //     $query=$this->db->query($sql);
    //     return $query;	 
   	// }
}
