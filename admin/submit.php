<?php
include("../conn.php");
if(isset($_POST['add_job'])){
    // echo "<pre>";
    // // print_r($_POST);
    // echo "<br/>";
    
    $required_info = ['post_name','post_date','short_info','department_name','recruitment_name','notification_name','start_date','last_date','result_date','answer_key_date','min_age','max_age','total_post','apply_online','notification_link','official_link'];

    foreach($required_info as $data){
      if(empty(trim($_POST[$data]))){
         echo $data. " is required";
         echo "<br/>";
         return ;
      }else{
        //echo "Data Okay";
      }
    }
     $values = [];
    foreach($required_info as $data){
      // $$data = $_POST[$data];
      array_push($values,$_POST[$data]);
    }
    
    $optional_data = ['vacancy_details_more','vacancy_details_more','form_filling_guides','important_links','imp_dates','form_fees'];
   
    foreach($optional_data as $data){
      if(!empty(trim($_POST[$data]))){
        // $$data = $_POST[$data];

        array_push($required_info,$data);
        array_push($values,$_POST[$data]);
      }
    }
    //  var_dump($required_info);
      echo "<br/>";
    //  echo implode(',',$required_info);

    //Insert query
    $sql = "INSERT INTO `job_post`("."`".implode("`,`",$required_info)."`".") VALUES("."'".implode("','",$values)."'".")";
    
    // echo $sql;  
    //Execute DB query
    $query = mysqli_query($conn,$sql);
    if($query){
      header("Location:http://localhost/sarkari_result/admin/job_list.php?success=1");
    }else{
      echo "Try Again";
    }    

}

if(isset($_GET['delete'])){
  $id = $_GET['id'];
  
  $sql = "DELETE FROM `job_post` WHERE `id`=$id";
  $query = mysqli_query($conn,$sql);
  if($query){
    header("Location:http://localhost/sarkari_result/admin/job_list.php?error=1");
  }
}