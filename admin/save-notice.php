<?php
      
session_start();
include('../connect.php');
$a = $_POST['notice_title'];
$b = $_POST['notice_detail'];
$d = $_POST['notice_link'];
// query
$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'efac_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/notice/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
  //do your write to the database filename and other details   
        $sql = "INSERT INTO notice (notice_title,notice_detail,file,notice_link,date) VALUES (:a,:b,:c,:d,now())";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$file_name_new,':d'=>$d));
 if($q){
      header("location:add-notice.php?success=true");
        }else{
            header("location:add-notice.php?failed=true");
        }
    }
?>