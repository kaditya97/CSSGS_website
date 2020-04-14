<?php
        
session_start();
include('../connect.php');
$a = $_POST['client_name'];
$b = $_POST['client_detail'];

// query
$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'efac_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/client/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
  //do your write to the database filename and other details   
        $sql = "INSERT INTO client (client_name,client_detail,file,date) VALUES (:a,:b,:c,now())";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$file_name_new,));
 if($q){
      header("location:add-client.php?success=true");
        }else{
            header("location:add-client.php?failed=true");
        }
    }
?>