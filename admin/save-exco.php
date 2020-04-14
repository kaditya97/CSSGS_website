<?php
include '../connect.php';
$a = $_POST['person_name'];
$b = $_POST['designation'];
$d = $_POST['facebook'];
$e = $_POST['twitter'];
$f = $_POST['linkedin'];

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'efac_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/member/'.$file_name_new;

 /* check if the file uploaded successfully */
 if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
        $sql = "INSERT INTO excos (person_name,designation,file,facebook,twitter,linkedin) VALUES (:a,:b,:c,:d,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$file_name_new,':d'=>$d,':e'=>$e,':f'=>$f));
if($q){
      header("location:add-exco.php?success=true");
        }else{
            header("location:add-exco.php?failed=true");
        } 
		}
