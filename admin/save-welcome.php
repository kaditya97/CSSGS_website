<?php 

include '../connect.php';
$body = $_POST['body'];

$query = ORM::for_table('welcome')->find_one(1);

$query ->body = $body;
$query ->save();
if($query->save()){
      header("location:add-welcome.php?success=true");
        }else{
            header("location:add-welcome.php?failed=true");
        }
?>
