<?php
        
session_start();
include('../connect.php');
$a = $_POST['project_title'];
$b = $_POST['project_detail'];
$d = $_POST['project_status'];
// query
$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'efac_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/project/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
  //do your write to the database filename and other details   
        $sql = "INSERT INTO project (project_title,project_detail,file,project_status,date) VALUES (:a,:b,:c,:d,now())";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$file_name_new,':d'=>$d,));
 if($q){
      header("location:add-project.php?success=true");
        }else{
            header("location:add-project.php?failed=true");
        }
    }
?>