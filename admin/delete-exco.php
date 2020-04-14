<?php

	include'../connect.php';
  $id=$_GET['id'];
  
  $image = "SELECT * FROM excos WHERE id = '$id'";
  $query = mysqli_query($conn, $image);
  $after = mysqli_fetch_assoc($query);

  unlink('../uploads/member/'.$after['file']);
 
	$result = $db->prepare("DELETE FROM excos WHERE id= :post_id");
	$result->bindParam(':post_id', $id);
       if($result->execute()){
      header("location:all-excos.php?success=true");
        }else{
            header("location:all-excos.php?failed=true");
        } 
		
?>