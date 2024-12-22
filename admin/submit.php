<?php
include("../conn.php");
if(isset($_POST['add_job'])){
    echo "<pre>";
    // print_r($_POST);
    echo "<br/>";
    
    $required_info = ['post_name','post_date','short_info','department_name','recruitment_name','notification_name','start_date','last_date','result_date','answer_key_date','min_age','max_age','total_post','apply_online','notification_link','official_link'];

    foreach($required_info as $data){
      if(empty(trim($_POST[$data]))){
         echo $data. " is required";
         echo "<br/>";
        //  return ;
      }else{
        //echo "Data Okay";
      }
    }
   
    foreach($required_info as $data){
      $$data = $_POST[$data];
    }
    // var_dump($post_name);
      // $post_name = $_POST['post_name'];
      // $post_date = $_POST['post_date'];
      // $short_info = $_POST['short_info'];
      // $department_name = $_POST['department_name'];
      // $recruitment_name = $_POST['recruitment_name'];
      // $notification_name = $_POST['notification_name'];
      // $start_date = $_POST['start_date'] ;
      // $last_date = $_POST['last_date'];
      // $result_date = $_POST['result_date'];
      // $answer_key_date = $_POST['answer_key_date'];
      // $min_age = $_POST['min_age'];
      // $max_age = $_POST['max_age'];
      // $total_post = $_POST['total_post'];
      // $apply_online = $_POST['apply_online'];
      // $notification_link = $_POST['notification_link'];
      // $official_link = $_POST['official_link'];
    
      $optional_data = ['vacancy_details_more','vacancy_details_more','form_filling_guides','important_links','imp_dates','form_fees'];

      foreach($optional_data as $data){
        if(!empty(trim($_POST[$data]))){
          $$data = $_POST[$data];
          array_push($required_info,$data);
        }
      }
      //  var_dump($required_info);
       echo "<br/>";
      //  echo implode(',',$required_info);

      $sql = "INSERT INTO `job_post`("."`".implode("`,`",$required_info)."`".") VALUES()";
      echo $sql;

      // if(!empty($_POST[] )){
      //   $vacancy_details_more = $_POST[];
      // }
     
      // if(!empty($_POST['form_filling_guides'] )){
      //   $form_filling_guides = $_POST[];
      // }
      // if(!empty($_POST[] )){
      //   $important_links = $_POST['important_links'];
      // }
      // if(!empty($_POST[] )){
      //   $imp_dates = $_POST['imp_dates'];
      // }
      // if(!empty(trim($_POST[] ))){
      //   $form_fees = $_POST['form_fees'];
      // }
    
      // $sql = "INSERT INTO `job_post`(`post_name`, `short_info`, `dept_name`, `recruitment_name`, `notification_title`, `start_date`, `last_date`, `post_date`, `min_age`, `max_age`, `total_post`, `apply_online`, `notification_link`, `official_link`) VALUES ('$post_name','$short_info','$department_name','$recruitment_name','$notification_name','$start_date','$last_date','$post_date','$min_age','$max_age','$total_post','$apply_online','$notification_link','$official_link')";

      // echo "<br/>";
      // echo $sql;

      // $query = mysqli_query($conn,$sql);
      // if($query){
      //   echo "Data inserted successfully";
      // }else{
      //   echo "Something wrong";
      // }

  
 

                

}