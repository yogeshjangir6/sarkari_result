<?php

if(isset($_POST['add_job'])){
    echo "<pre>";
    // print_r($_POST);
    if((!empty($_POST['post_name'] ) && !empty($_POST['post_date']))
    &&
    (!empty($_POST['short_info'] ) && !empty($_POST['department_name']))  
    &&
    (!empty($_POST['recruitment_name'] ) && !empty($_POST['notification_name']))
    &&
    (!empty($_POST['start_date'] ) && !empty($_POST['last_date']))
    &&
    (!empty($_POST['result_date'] ) && !empty($_POST['answer_key_date']))
    &&
    (!empty($_POST['min_age'] ) && !empty($_POST['max_age']))
    &&
    (!empty($_POST['total_post'] ) && !empty($_POST['apply_online']))
    &&
    (!empty($_POST['notification_link'] ) && !empty($_POST['official_link']))
    )
   {
      $post_name = $_POST['post_name'];
      $post_date = $_POST['post_date'];
      $short_info = $_POST['short_info'];
      $department_name = $_POST['department_name'];
      $recruitment_name = $_POST['recruitment_name'];
      $notification_name = $_POST['notification_name'];
      $start_date = $_POST['start_date'] ;
      $last_date = $_POST['last_date'];
      $result_date = $_POST['result_date'];
      $answer_key_date = $_POST['answer_key_date'];
      $min_age = $_POST['min_age'];
      $max_age = $_POST['max_age'];
      $total_post = $_POST['total_post'];
      $apply_online = $_POST['apply_online'];
      $notification_link = $_POST['notification_link'];
      $official_link = $_POST['official_link'];
    
      if(!empty($_POST['vacancy_details_more'] )){
        $vacancy_details_more = $_POST['vacancy_details_more'];
      }
     
      if(!empty($_POST['form_filling_guides'] )){
        $form_filling_guides = $_POST['form_filling_guides'];
      }
      if(!empty($_POST['important_links'] )){
        $important_links = $_POST['important_links'];
      }
      if(!empty($_POST['imp_dates'] )){
        $imp_dates = $_POST['imp_dates'];
      }
      if(!empty($_POST['form_fees'] )){
        $form_fees = $_POST['form_fees'];
      }
   }
 

                

}